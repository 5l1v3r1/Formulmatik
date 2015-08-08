<?php 
session_start(); 
if(!isset($_POST['submit']))
{
$page = $_SERVER['HTTP_REFERER'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formülmatik Beta - Üye Girişi</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="template.css" type="text/css" />
  <style type="text/css">
body {
    overflow:hidden;
}
/* Good Looking forms */
input[type="text"], input[type="password"] { 
    width:12em; 
    border-radius:2px; 
    border: solid 1px #ccc; 
    padding:0.4em; 
    background-color: #f5f5f5; 
    box-shadow: inset 0 2px 3px rgba(0,0,0,0.2); 
}
	input[type="submit"] { 
		padding:0.5em 1em; line-height:1em; cursor:pointer;
		border-radius:4px; color:#000; font-weight:bold; font-size:inherit;
		border:solid 1px #ccc;	box-shadow:0 1px 5px rgba(0,0,0,0.2);
		background-position: center bottom;
}
	input[type="submit"]:active 
	 {-webkit-box-shadow: none; box-shadow:none;}
</style>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="header-content">
<h1 style="color: rgb(101, 148, 74); top: 21px; height: 51px; left: 11px; width: 247px;" id="logo"><a href="index.php">Formulmatik</a></h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: white;">
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<div align="center">
<form action="giris.php" method="post">
<label>Kullanıcı Adı : </label>
&nbsp;<input type="text" name="username"/><br />
</br>
<label>Şifre:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password"/><br/>
</br>
<input type="hidden" name="foo" value="<?php echo $page;?>" />
<input type="submit" value=" Giriş "/><br />
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
include("db.php");
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$password=md5($password); // Encrypted Password
$query="SELECT name FROM users WHERE user='$username' and pass='$password'";
$result=mysqli_query($db,$query);
$name=mysqli_fetch_assoc($result);

$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["name"] = $name["name"];
$foo = $_POST["foo"];
echo '<script>window.location="'.$foo.'"</script>';
//header("location: index.php"); don't work :(
}
else
{
echo '</br></br><b>Kullanıcı Adınız veya Şifreniz Yanlış</b>';
}
}
echo '<p><b>&Uuml;yeliğiniz yok mu ? </b> &nbsp;&Uuml;ye olmak i&ccedil;in buraya <a href="http://formulmat.tk/kayit.php">tıklayınız</a>.</p>
'
?>
</div>
</body>
</html>
