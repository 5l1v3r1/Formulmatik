<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formülmatik Beta</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="template.css" type="text/css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function () { //When search result display, search bar is hidden.  
	$('#current').click(function () { //Click 'Formul Ara' to show it. 
		$('#searchbox').slideToggle( "fast" );
	});
});
</script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
  <script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.min.js"></script>  
	<script type="text/javascript">
	$(function(){ 
		var $container = $('#body');
		$container.imagesLoaded(function(){
		  $container.masonry({ //Add Squared Look to results.
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

#body { margin: 0 auto; overflow: hidden;}

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
  <li><a id="current" href="#" >Formül Ara</a></li>
</ul>
</div>
</div>
</div>';
}
else {
	echo '
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ho&#351;geldiniz '.$_SESSION['name'].'!</span>&nbsp;<a href="logout.php"><span style="color:#FF0000;margin-right:50px">x</span></a></p>
<ul style="top: 50px; left: 477px; width: 100%;">
  <li><a href="index.php">Anasayfa</a></li>
  <li><a href="ygs.php">YGS</a></li>
  <li><a href="lys.php">LYS</a></li>
  <li><a href="favorilerim.php">Favori Formüllerim</a></li>
  <li><a id="current" href="#" >Formül Ara</a></li>
</ul>
</div>
</div>
</div>';
}
?>
<-- -->Google special search like searchbox </-->
<div style="display:none;" id="searchbox" align="center">
<form name="search" action="" method="get">
<div class="search">
<input placeholder="Örn: Pisagor Teoremi" class="textbox" type="text" name="q"><input type="submit" value="Ara" class="submit" title="ara">
</div>
<style type="text/css"> <-- -->Original Google Special Search CSS </-->
input[type=text]::-webkit-input-placeholder { /* Safari, Chrome(, Opera?) */
 color:gray;
 font-style:italic;
}
input[type=text]:-moz-placeholder { /* Firefox 18- */
 color:gray;
 font-style:italic;
}
input[type=text]::-moz-placeholder { /* Firefox 19+ */
 color:gray;
 font-style:italic;
}
.search {
  background: #d8d8d8 url('http://google.com/cse/images/look/cse_theme_shiny_form_bg.png') repeat-x top left;
  border: 1px solid #cccccc;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  width: 80%;
  margin: 0 0 2% 0;
  -webkit-box-shadow: 0 1px 2px #999;
  -moz-box-shadow: 0 1px 2px #999;
  box-shadow: 0 1px 2px #999;
  display: block;  
}

input.textbox
{
  padding: 5px 7px;
  font-size: 14px;
  width:85%;
  margin:15px;
  border:solid 1px #B6BEC5;
  border-radius: 3px;  
}

input.submit {
  font-family: inherit;
  font-size: 11px;
  color: #292B33;
  font-weight: bold;
  padding: 0 8px;
  height: 27px;
  min-width: 54px;
  background: #d0d1d4;
  border: 1px solid #B6BEC5;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
}
</style>
</form>
</div>
<div id="body">
<br>
<?php
include("db.php");
if(isset($_GET["q"]))
{
$q = mysqli_real_escape_string($db,$_GET['q']);
mysqli_query($db,"SET NAMES 'utf8'");
mysqli_query($db,"SET CHARACTER SET utf8");
mysqli_query($db,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
$query = "SELECT * FROM `formula` WHERE name LIKE '%$q%' ORDER BY fid DESC"; //Query formulas that name contains search text
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="box">';
    
    if (isset($_SESSION['username'])){
    $fid=$row["fid"];
    echo '<a onclick="add_fav(';
    echo  $fid;
    echo ')"><div align="left";width:20px;height:20px;cursor:pointer;">';
    echo '<img src="http://static.formulma.tk/img/favorit.png">';
    echo '</a></div>';
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
$f=mysqli_num_rows($result);
if($f==0) { //There is no result. Throw Exception.
echo'
<img style="margin-left:10%" src="http://static.formulma.tk/img/error.gif"> 
<b>
<p style="margin-left:20%;font-family:cursive;">Verdiğiniz ipuçalarına uygun sonuç bulunamadı.</p>
<p style="margin-left:20%;font-family:cursive;">İfadeleri düzgün ve tam yazdığınızdan emin olun ya da başka ipuçları kullanın...</p>
</b>';
}
}
else { //If no POST send, Print info.
echo '<img src="http://static.formulma.tk/img/this.png" width="100" height="100" style="margin-left:10%">
<b>
<p style="margin-left:5%;font-family:cursive;">Buradan aradığın formülü rahatça bulabilirsin !</p>
<p style="margin-left:5%;font-family:cursive;">Arama panelini kapatıp açmak için yeşil "Formül Ara" yazan yere tıklaman yeterli.</p>
</b>
<script>$("#searchbox").css("display", "block");</script>';
}
?>
</div>
</div>
</body>
</html>
