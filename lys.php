<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formülmatik Beta-LYS Konuları</title>
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
<ul style="top: 50px; left: 477px; width: 371px;">
  <li><a href="index.php">Anasayfa</a></li>
  <li><a href="ygs.php">YGS</a></li>
  <li><a href="" id="current">LYS</a></li>
  <li><a href="giris.php">Üye Giri&#351;i</a></li>
  <li><a href="kayit.php">Üye Ol !<br />
    </a></li>
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
  <li><a href="" id="current">LYS</a></li>
  <li><a href="favorilerim.php">Favori Formüllerim</a></li>
  <li><a href="#">Formül Ekle !<br />
    </a></li>
</ul>
</div>
</div>
</div>';
}
?>
<div class="tree" style="margin:3%">
<ul id="treemenu" class="treeview">
<li><h3>Matematik</h3><ul>
<li><a href="formulGoster.php?dersId=21&konuId=111"><h5>Polinomlar</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=112"><h5>II. Dereceden Denklemler</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=113"><h5>II. Dereceden Eşitsizlikler</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=114"><h5>Parabol</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=115"><h5>Trigonometri</h5></a></li>
        
<li><h4>Olasılık Grubu</h4><ul>
<li><a href="formulGoster.php?dersId=21&konuId=121"><h5>Permütasyon</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=122"><h5>Kombinasyon</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=123"><h5>Binom Açılımı</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=124"><h5>Olasılık</h5></a></li>
</ul>
<li><h4>Logaritma</h4><ul>
<li><a href="formulGoster.php?dersId=21&konuId=131"><h5>Üslü Sayıların Özellikleri</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=132"><h5>Logaritmanın Özellikleri</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=133"><h5>Logaritmada Dört İşlem</h5></a></li>
</ul>

<li><h4>Karmaşık Sayılar</h4><ul>
<li><a href="formulGoster.php?dersId=21&konuId=141"><h5>Karmaşık Sayıların Özellikleri</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=142"><h5>Karmaşık Düzlem ve Özellikleri</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=143"><h5>Karmaşık Sayılarda Dört İşlem</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=145"><h5>Karmaşık Sayılarda Kuvvet ve Kök Alma </h5></a></li>
</ul>

<li><h4>Tümevarım (Toplam ve Çarpım Sembolleri)</h4><ul>
<li><a href="formulGoster.php?dersId=21&konuId=151"><h5>Toplam Sembolü (∑)</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=152"><h5>Çarpım Sembolü (∏)</h5></a></li>
</ul>

<li><h5>Diziler ve Seriler</h5><ul>
<li><a href="formulGoster.php?dersId=21&konuId=161"><h5>Aritmetik Dizi</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=162"><h5>Geometrik Dizi</h5></a></li>
</ul>

<li><h5>Matris ve Determinant</h5></li>
<li><a href="formulGoster.php?dersId=21&konuId=171"><h5>Özel Tanımlı Fonksiyonlar</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=172"><h5>Limit ve Süreklilik</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=173"><h5>Türev</h5></a></li>
<li><a href="formulGoster.php?dersId=21&konuId=174"><h5>İntegral</h5></a></li>

<li><a href="formulGoster.php?dersId=21&konuId=181"><h5>Diğer</h5></a><ul>
<li><a href="formulGoster.php?dersId=21&konuId=182"><h5>İstatistik</h5></a></li>
</ul>
</ul>

<li><h3>Geometri</h3><ul>   

<li><h4>Benzerlik</h4><ul>
<li><a href="formulGoster.php?dersId=22&konuId=211"><h5>Üçgende Benzerlik</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=212"><h5>Benzerlik Alan Bağıntıları</h5></a></li>
</ul>

<li><h4>Üçgenler</h4><ul>
<li><a href="formulGoster.php?dersId=22&konuId=221"><h5>Üçgende Açılar</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=222"><h5>Üçgende Açı Kenar Bağıntıları</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=223"><h5>Dik Üçgenin Özellikleri</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=224"><h5>Üçgende Açı ortay</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=225"><h5>Üçgende Kenarortay</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=226"><h5>Özel Üçgenler</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=227"><h5>Üçgende Alan</h5></a></li>
</ul>

<li><h4>Dörtgenler</h4><ul>
<li><a href="formulGoster.php?dersId=22&konuId=231"><h5>Paralelkenar−Eşenar Dörtgen</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=232"><h5>Dikdörtgen−Kare</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=233"><h5>Yamuk−Deltoid</h5></a></li>
</ul>
<li><h4>Çokgenler</h4><ul>
<li><a href="formulGoster.php?dersId=22&konuId=241"><h5>Çokgenlerin Özellikleri</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=242"><h5>Beşgen</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=243"><h5>Altıgen</h5></a></li>
</ul>
<li><h4>Çemberler</h4><ul>
<li><a href="formulGoster.php?dersId=22&konuId=251"><h5>Çemberde Açılar</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=252"><h5>Çemberde Uzunluklar</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=253"><h5>Çemberde Alan</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=254"><h5>Çemberin Analitik İncelenmesi(Denklemi)</h5></a></li>
</ul>
<li><a href="formulGoster.php?dersId=22&konuId=261"><h4>Uzay Geometri</h4></a><ul>
<li><a href="formulGoster.php?dersId=22&konuId=262"><h5>Prizmalar</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=263"><h5>Piramitler</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=264"><h5>Uzayda Doğru ve Düzlem Denklemleri</h5></a></li>
</ul>
<li><a href="formulGoster.php?dersId=22&konuId=271"><h4>Analitik Geometri</h4></a><ul>
<li><a href="formulGoster.php?dersId=22&konuId=272"><h5>Vektörler</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=273"><h5>Doğrunun Analitik İncelenmesi</h5></a></li>
<li><a href="formulGoster.php?dersId=22&konuId=274"><h5>Konikler</h5></a></li>
</ul>
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
