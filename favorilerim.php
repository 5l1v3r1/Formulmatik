<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formülmatik Beta</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script type="text/javascript" >
function rm_fav(id) {
$.post("favsdel.php", {id: id}); //POST id of formula that you want remove from favorites to favsdel.php.
alert('Formül '+id+' favorilerinizden çıkartıldı !');
location.reload();
}
</script>
  <link rel="stylesheet" href="template.css" type="text/css" />
  <style type="text/css">
body {
    overflow-x:hidden;
}

#body {width: 100%;overflow: hidden;}
.del{
	position:relative;
	width:20px;
	height:20px;
	float:right;
	cursor: pointer;
	margin-right: 40px;
	z-index: 1;
}

#print a {
position: fixed;
bottom: 0px; 
right: 0px; 
position: fixed;
text-indent: -1000px;
width: 48px; 
height: 48px; 
overflow: hidden;
background: url("img/print.png") 0 0 no-repeat; 
}
</style>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="header-content">
<h1 style="color: rgb(101, 148, 74); top: 21px; height: 51px; left: 11px; width: 247px;" id="logo"><a href="index.php">Formulmatik</a></h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: white;">
<br>
<?php if(!isset($_SESSION['username'])){
echo '	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ho&#351;geldin Ziyaretçi !</span>
<ul style="top: 50px; left: 477px; width: 100%;">
  <li><a href="index.php">Anasayfa</a></li>
  <li><a href="ygs.php">YGS</a></li>
  <li><a href="lys.php">LYS</a></li>
  <li><a href="giris.php">Üye Giri&#351;i</a></li>
  <li><a href="kayit.php">Üye Ol !</a></li>
  <li><a href="formulAra.php">Formül Ara</a></li>
</ul>
</div>
</div>
</div>';
}
else {
	echo '
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ho&#351;geldiniz '.$_SESSION['name'].'!</span>&nbsp;<a href="logout.php"><span style="color:#FF0000">x</span></a></p>
<ul style="top: 50px; left: 477px; width: 100%;">
  <li><a href="index.php"> Anasayfa</a></li>
  <li><a href="ygs.php">YGS</a></li>
  <li><a href="lys.php">LYS</a></li>
  <li><a href=""id="current">Favori Formüllerim</a></li>
  <li><a href="#">Formül Ekle !</a></li>
  <li><a href="formulAra.php">Formül Ara</a></li>
</ul>
</div>
</div>
</div>';
}
?>
<div id="body">
<div>
<?php
    include("db.php");
    $username=mysqli_real_escape_string($db,$_SESSION["username"]);
    $pass=mysqli_real_escape_string($db,$_SESSION["password"]);
    $hashed=md5($pass);
    $query = "SELECT * FROM users WHERE user='$username' AND pass='$hashed' ORDER BY id DESC"; //Get user's information on DB
    $result=mysqli_query($db,$query) or die('Error, query failed!!!');
    $num=mysqli_num_rows($result);
    $k = $num;
    if ($k!=0) //If user is valid credential (Logged in)
    {
	mysqli_query($db,"SET NAMES 'utf8'");
	mysqli_query($db,"SET CHARACTER SET utf8");
	mysqli_query($db,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");   
   $row = mysqli_fetch_assoc($result);
   $favid = $row["fav"]; //Get data from fav row.    
   }
	 else {  //Else, say "You're not logged in."
	 	echo '
	 	<img style="margin-left:10%" src="img/error.gif"> 
<b>
<p style="margin-left:20%;font-family:cursive;">Kullanıcı girişi yapmadınız bu yüzden</p>
</b> ';
	 	}
	 	
$favs = explode(",", $favid); 
$favs = array_values(array_filter($favs)); //Make array from datas
$len=count($favs);
if($len > 1) { //Bug: fav row have one more comma, so return one empty result.
echo "Favorinizdeki $len tane formül gösteriliyor:"; //Say how many formulas in favorites
echo "\n";
$i = $len;
while($i > 0){
$i--;
$query2="SELECT * FROM formula  WHERE fid='".$favs[$i]. "'"; //Return formula information from database.
    $result2=mysqli_query($db,$query2) or die('Error, query failed!!!');
    $row = mysqli_fetch_assoc($result2);
    echo "<b><ul><li>".$row["name"]."</p></b></ul></br>"; //Print name
      $fid=$row["fid"];
    echo '<a onclick="rm_fav('.$fid.')"><div class="del">'; //Remove from favorites button.
    echo '<img src="http://static.formulma.tk/img/remove.png"></div></div></a>';
    $boolean = $row["imbool"]; //Formula have supported by external image ? 
    if($boolean==1) {
        echo '<img src="uploads/';
        echo $row["image"];
        echo '"/></br>';
    }
    //Get latex code from DB and present formula with Google Chart Api   
    echo "</br>";
    echo '<img style="margin-left:70px;margin-top:-20px" src="http://chart.apis.google.com/chart?chf=bg,s,FFFFFF00&cht=tx&chl='; 
    $latex = $row["code"]; 
    $latex=str_replace('+','%2B',$latex); //Google Chart Api Bugfix
    echo $latex;
    echo '"/>';
}
}
else { //There is no formula in your favorites.
	echo '<b>';
	if ( isset($_SESSION["username"]))
	{
	echo'<img style="margin-left:10%" src="http://static.formulma.tk/img/error.gif">'; 
	}
	echo'
	<p style="margin-left:20%;font-family:cursive;">Favorilerinizde hiç formül yok ! </p>
	<p style="margin-left:20%;font-family:cursive;"><a href="formulAra.php">Belki birkaç tane eklemek istersiniz...</a></p>
	</b>';
}
//Print page 
echo'<div id="print"><a href="/yazdir.php?page=favorilerim"><img src="http://static.formulma.tk//img/print.png"></a></div>';  
?>
</div>
</div>
</body>
</html>
