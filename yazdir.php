<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
echo "Formulmatik Yazıcı Dostu Sayfa";
echo '</br></br>';
$page=$_GET["page"];
include("db.php");
if($page == "favorilerim") 
{
    $username=$_SESSION["username"];
    $pass=$_SESSION["password"];
    $hashed=md5($pass);
    $query = "SELECT * FROM users WHERE user='$username' AND pass='$hashed' ORDER BY id DESC";
    $result=mysqli_query($db,$query) or die('Error, query failed!!!');
    $num=mysqli_num_rows($result);
   $k = $num;
    if ($k!=0)
    {
		mysqli_query($db,"SET NAMES 'utf8'");
		mysqli_query($db,"SET CHARACTER SET utf8");
		mysqli_query($db,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");   
   $row = mysqli_fetch_assoc($result);
   $favid = $row["fav"];      
   }
	 else {
	 	echo "Kullanıcı girişi yapmadınız bu yüzden ";
	 	}

$favs = explode(",", $favid);
$favs = array_values(array_filter($favs));
$len=count($favs);
if($len > 1) {
echo "Favorinizdeki $len tane formül gösteriliyor:";
echo "\n";
$i = $len;
while($i > 0){
$i--;
$query2="SELECT * FROM formula  WHERE fid='".$favs[$i]. "'";
    $result2=mysqli_query($db,$query2) or die('Error, query failed!!!');
    $row = mysqli_fetch_assoc($result2);
    echo "<b><ul><li>".$row["name"]."</p></b></ul></br>";
    $boolean = $row["imbool"];
    if($boolean==1) {
        echo '<img src="http://static.formulma.tk/uploads/';
        echo $row["image"];
        echo '" height="200" width="200"/></br>';
    }
    echo "</br>";
    echo '<img src="http://chart.apis.google.com/chart?chf=bg,s,FFFFFF00&cht=tx&chl=';
    $latex = $row["code"];
    $latex=str_replace('+','%2B',$latex); //Google Chart Api Bugfix
    echo $latex;
    echo '"/>';
}
}
else {
	echo '<b>Favorilerinizde hiç formül yok ! </b>';
	echo '<a href="ygs.php"><b>Belki birkaç tane eklemek istersiniz...</b></a>';
}
}
else 
{
$konu = $_GET["konuId"];
$ders = $_GET["dersId"];
mysqli_query($db,"SET NAMES 'utf8'");
mysqli_query($db,"SET CHARACTER SET utf8");
mysqli_query($db,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
$query = "SELECT * FROM formula WHERE dersId='$ders' AND konuId='$konu' ORDER BY fid DESC";
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_assoc($result)) {   
    echo "<b><ul><li>".$row["name"]."</p></b></ul></br>";
    echo "</br>";
    $boolean = $row["imbool"];
    if($boolean==1) {
        echo '<img src="http://static.formulma.tk/uploads/';
        echo $row["image"];
        echo '" height="200" width="200"/></br>';
    }
    echo "</br>";
    echo '<img src="http://chart.apis.google.com/chart?chf=bg,s,FFFFFF00&cht=tx&chl=';
    $latex = $row["code"];
    $latex=str_replace('+','%2B',$latex); //Google Chart Api Bugfix
    echo $latex;
    echo '"/>';
}
}
 echo '</br></br><a href="javascript:window.print()">Sayfayı yazdır</a>'; 
?>