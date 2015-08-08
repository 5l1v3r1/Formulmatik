<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formülmatik Beta</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="google-site-verification" content="9wcTvFRDL9OfqW21KP_5wR-eG9BgCa7a0-WXOn6Ls8M" />
  <link rel="stylesheet" href="template.css" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
  <style type="text/css">
body {
    overflow:hidden;
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
  <li><a href="" id="current">Anasayfa</a></li>
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
Ho&#351;geldiniz '.$_SESSION['name'].'!</span>&nbsp;<a href="logout.php"><span style="color:#FF0000;margin-right:50px">x</span></a></p>
<ul style="top: 50px; left: 477px; width: 100%;">
  <li><a href="#" id="current">Anasayfa</a></li>
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
<div class="content" style="text-align:center;">
<span style="font-size: 18px;">
Formülmatik
öncelikle YGS ve LYS haz&#305;rlanan ö&#287;renciler için gerekli
formülleri tek bir site üzerinde toplamay&#305; amaçlayan bir web
projesidir.Proje
kapsam&#305;nda,defter kitap kar&#305;&#351;t&#305;rmaya gerek kalmaks&#305;z&#305;n s&#305;k kullan&#305;lan
Matematik, Geometri , Fizik ve Kimya formüllerini tek t&#305;kla kolayca
bulabilir,daha sonra&nbsp; da kullanmak üzere ka&#287;&#305;da
basabilirsiniz. Sitede bulunan formüllerden faydalanmak için üye
olman&#305;z gerekmez fakat tüm özellikleri
kullanabilmeniz için üye olman&#305;z önerilir.</span><br />
<br />
<span style="font-size: 24px;">Arad&#305;&#287;&#305;n&#305;z
Formülü Bulmak Için
Lütfen Seviyenizi Seçin :</span><br />
<br />
<br />
<a href="ygs.php"><img style="width: 166px; height: 64px;" src="http://static.formulma.tk/img/bygs.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="lys.php"><img style="width: 164px; height: 63px;" src="http://static.formulma.tk/img/blys.png" /></a><br />
</div>
</body>
</html>
