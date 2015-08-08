<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formülmatik Beta</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
  <script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.min.js"></script>  
	<script type="text/javascript">
	$(function(){
		var $container = $('#body');
		$container.imagesLoaded(function(){
		  $container.masonry({
			itemSelector : '.box'
		  });
		});
		
	});
	</script>
	<script>
function add_fav(id) {
$.post("favswrite.php", {id: id});
alert('Formül '+id+' favorilerinize eklendi');
}
</script>	
	</script>
  <link rel="stylesheet" href="template.css" type="text/css" />
  <style type="text/css">
body {
    overflow-x:hidden;
}

#body { margin: 0 auto; overflow: hidden; background: #fff}

.box {width: 250px; height:340px; margin: 5px; float: left; border-box: box-sizing; padding: 10x; overflow: hidden; background: #ddd; color: #333; text-align:center;}

#print a {
position: absolute;
bottom: 0px; 
right: 0px; 
position: fixed;
text-indent: -1000px;
width: 48px; 
height: 48px; 
overflow: hidden;
background: url("http://static.formulma.tk/img/print.png") 0 0 no-repeat; 
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
  <li><a href="#">Anasayfa</a></li>
  <li><a href="ygs.php">YGS</a></li>
  <li><a href="lys.php">LYS</a></li>
  <li><a href="favorilerim.php">Favori Formüllerim</a></li>
  <li><a href="#">Formül Ekle !</a></li>
  <li><a href="formulAra.php">Formül Ara</a></li>
</ul>
</div>
</div>
</div>';
}
?>
<div id="body">
<br>
<?php
include("db.php");
$konu = $_GET["konuId"];
$ders = $_GET["dersId"];
mysqli_query($db,"SET NAMES 'utf8'");
mysqli_query($db,"SET CHARACTER SET utf8");
mysqli_query($db,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
//Query matched formulas with given ders (lesson) and konu (subject) id.
$query = "SELECT * FROM formula WHERE dersId='$ders' AND konuId='$konu' ORDER BY fid DESC"; 
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="box">';
    
    if (isset($_SESSION['username'])){
    $fid=$row["fid"];
    echo '<a onclick="add_fav('.$fid.')"><div align="left";width:20px;height:20px;cursor:pointer;">
    <img src="http://static.formulma.tk/img/favorit.png"></a></div>';
 }    
    echo '<b><ul><li>'.$row["name"].'</p></b></ul></br>
    </br>';
    $boolean = $row["imbool"];
    if($boolean==1) {
        echo '<img src="http://static.formulma.tk/uploads/'.$row["image"].'" height="200" width="200"/></br>';
    }
    echo '</br>
    <img src="http://chart.apis.google.com/chart?chf=bg,s,FFFFFF00&cht=tx&chl=';
    $latex = $row["code"];
    $latex=str_replace('+','%2B',$latex); //Google Chart Api Bugfix
    echo $latex;
    echo '"/>
    </div>';
}
    echo '<div id="print"><a href="yazdir.php?page=formulGoster&dersId='.$ders.'&konuId='.$konu.'"></a></div>';
	$f=mysqli_num_rows($result);

if($f==0) {
echo'
<img style="margin-left:10%" src="http://static.formulma.tk/img/error.gif"> 
<b>
<p style="margin-left:20%;font-family:cursive;">Bu konuya dair henüz bir formül yok ya da yanlış ders ve kodu kodu girdiniz.</p>
<p style="margin-left:20%;font-family:cursive;">Doğru adres olduğundan emin olun ya da başka bir konu seçin.</p>
</b>';
}
?>
</div>
</div>

</body>
</html>
