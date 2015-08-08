<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formülmatik Beta-YGS Konuları</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="template.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/simpletree.css" />
  <script type="text/javascript" src="/simpletreemenu.js"></script>
  <style type="text/css">
body {
    overflow:hidden;
}
h3 {color:green;}
table#footer a:link {color:#FFFFFF;text-decoration:none}    
table#footer a:visited {color:#FFFFFF;text-decoration:none} 
table#footer a:hover {color:#FFFFFF;text-decoration:none}   
table#footer a:active {color:#FFFFFF;text-decoration:none}  
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
  <li><a href="" id="current">YGS</a></li>
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
  <li><a href="index.php">Anasayfa</a></li>
  <li><a href="" id="current">YGS</a></li>
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
<div class="tree" style="margin:3%">
<ul id="treemenu" class="treeview">
<li><h3>Matematik</h3><ul>
<li><h4>Sayılar</h4><ul>
<li><a href="formulGoster.php?dersId=11&konuId=111"><h5>Taban Aritmatiği</h5></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=112"><h5>Asal Sayı ve Faktöriyel</h5></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=113"><h5>Bölme-Bölünebilme</h5></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=114"><h5>OBEB-OKEK</h5></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=115"><h5>Rasyonel Sayılar</h5></a></li>
</ul>        
<li><h4>Üslü ve Köklü Sayılar</h4><ul>
<li><a href="formulGoster.php?dersId=11&konuId=121"><h5>Üslu Sayılar</h5></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=122"><h5>Köklü Sayılar</h5></a></li>
</ul>
<li><a href="formulGoster.php?dersId=11&konuId=131"><h4>Oran Orantı</h4></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=132"><h4>1.Dereceden Denklemler</h4></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=141"><h4>Mantık</h4></a><ul>
<li><a href="formulGoster.php?dersId=11&konuId=142"><h4>De Morgan Kuralları</h4></a></li>
</ul>
<li><a href="formulGoster.php?dersId=11&konuId=151"><h4>Bağıntı ve Fonksiyon</h4></a></li>
<li><a href="formulGoster.php?dersId=11&konuId=152"><h4>Modüler Aritmatik</h4></a></li>
</ul>

<li><h3>Geometri</h3><ul>
<li><a href="formulGoster.php?dersId=12&konuId=121"><h4>Açılar</h4></a></li>        
<li><h4>Üçgenler</h4><ul>
<li><a href="formulGoster.php?dersId=12&konuId=221"><h5>Açıları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=222"><h5>Uzunlukları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=223"><h5>Özellikleri</h5></a></li>
</ul>
<li><h4>Dörtgenler</h4><ul>
<li><a href="formulGoster.php?dersId=12&konuId=231"><h5>Açıları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=232"><h5>Uzunlukları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=233"><h5>Özellikleri</h5></a></li>
</ul>
<li><h4>Çokgenler</h4><ul>
<li><a href="formulGoster.php?dersId=12&konuId=241"><h5>Açıları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=242"><h5>Uzunlukları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=243"><h5>Özellikleri</h5></a></li>
</ul>
<li><h4>Çemberler</h4><ul>
<li><a href="formulGoster.php?dersId=12&konuId=251"><h5>Açıları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=252"><h5>Uzunlukları</h5></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=253"><h5>Özellikleri</h5></a></li>
</ul>
<li><a href="formulGoster.php?dersId=12&konuId=261"><h4>Analitik Geometri</h4></a></li>
</ul>

<li><h3>Fizik</h3><ul>
<li><a href="formulGoster.php?dersId=12&konuId=311"><h4>Vektörler</h4></a></li>     
<li><a href="formulGoster.php?dersId=12&konuId=312"><h4>Basit Makinalar</h4></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=313"><h4>Doğrusal Hareket</h4></a></li>  
<li><a href="formulGoster.php?dersId=12&konuId=314"><h4>İş-Enerji</h4></a></li>  
<li><a href="formulGoster.php?dersId=12&konuId=315"><h4>Kütle-Hacim-Özkütle</h4></a></li>  
<li><a href="formulGoster.php?dersId=12&konuId=316"><h4>Isı ve Sıcaklık</h4></a></li>  
<li><a href="formulGoster.php?dersId=12&konuId=317"><h4>Elektrik</h4></a></li>  
</ul>

<li><h3>Kimya</h3><ul>
<li><a href="formulGoster.php?dersId=12&konuId=411"><h4>Mol Kavramı</h4></a></li>
<li><a href="formulGoster.php?dersId=12&konuId=412"><h4>Kimyasal Tepkimeler</h4></a></li>
</ul>        
</ul>
</body>

<script type="text/javascript">
ddtreemenu.createTree("treemenu", true)
</script>
</div>
</body>
</html>
