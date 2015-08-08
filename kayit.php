<?php

$cryptinstall="captcha/cryptographp.fct.php";

include $cryptinstall; 
include("db.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Formulmatik - Üye Kayıt</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
  
  <script src="utils/jquery.validate.js"></script>
  
  <script>
	$.validator.setDefaults({
		submitHandler: function() {
			//alert("submitted!");
			form.submit();
		}
	});

	$().ready(function() {
		// validate the form when it is submitted
		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 3
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				agree: "required"
			},
			messages: {
				firstname: "Lütfen adınızı giriniz.",
				lastname: "Lütfen soyadınızı giriniz.",
				username: {
					required: "Lütfen kullanıcı adınızı giriniz.",
					minlength: "Kullanıcı adınız en az 3 karakterden oluşmalıdır."
				},
				password: {
					required: "Şifre alanı boş olamaz.",
					minlength: "Şifreniz en az 6 karakterden oluşmalıdır."
				},
				confirm_password: {
					required: "Lütfen şifrenizi tekrar giriniz.",
					minlength: "Şifreler eşleşmiyor.",
					equalTo: "Şifreler eşleşmiyor."
				},
				email: "Lütfen geçerli bir e-posta adresi yazınız.",
				agree: ""
			}
		});

		// propose username by combining first- and lastname and convert Turkish characters
function conv(word) {
	for (i=0;i<=word.length;i++) {
		word = word.replace("ı","i").replace("ş","s").replace("ğ","g").replace("ü","u").replace("ö","o").replace("ç","c").replace("İ","I").replace("Ş","S").replace("Ã","G").replace("Ü","U").replace("Ö","O").replace("Ç","C");
	}
	return word;
}		
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			var fullname = firstname+" "+lastname
			document.getElementById("name").value=fullname
			var usernamebox = firstname+"."+lastname
			usernamebox = conv(usernamebox);
			if (firstname && lastname && !this.value) {
				this.value = usernamebox.toLowerCase();
			}
		});
	});
	</script>
<link rel="stylesheet" href="template.css" type="text/css" />
<style type="text/css">
body {
    overflow:hidden;
}
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
label {
    width: 100px;
    float:left; 
    text-align: left;
}
input {
     width: 200px;
     margin: 0 0 0 10px;  
}

	#signupForm {
		width: 700px;
	}
	#signupForm label.error {
		margin-left: 10px;
		width: 300px;
		display: inline;
		color: red;
		float:right;
		text-align: left;
	}
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
<div align="center">
<form id="signupForm" method="post" action="kayit.php">
  <p> <label for="firstname">Adınız</label> <input id="firstname" name="firstname" type="text"> </p>
  <p> <label for="lastname">Soyadınız</label> <input id="lastname" name="lastname" type="text"> </p>
  <p> <label for="username">Kullanıcı adı</label> <input id="username" name="username" type="text"> </p>
  <p> <label for="password">Şifre</label> <input id="password" name="password" type="password"> </p>
  <p> <label for="confirm_password">Şifre (Tekrar)</label> <input id="confirm_password" name="confirm_password" type="password"> </p>
  <p> <label for="email">E-Posta</label> <input id="email" name="email" type="text"> </p>
  <input name="name" id="name" type="hidden">
  <table cellpadding="1">
    <tbody>
      <tr>
        <td align="center"><?php dsp_crypt(0,1); ?><br> <!--Show Captcha-->
        </td>
      </tr>
      <tr>
        <td align="center">Resimde gösterilen kodu yazınız:<br>
        <input style="width: 290px;" name="code" type="text"></td>
      </tr>
      <tr>
      <br>
      <br>
        <td align="center"><input name="submit" value="Kayıt Ol" type="submit"></td>
        <p><label for="agree"></label><input class="checkbox" style="display: none;" id="agree" name="agree" checked="checked" type="checkbox"></p>
      </tr>
    </tbody>
  </table>
</form>
</div>

<?php 
if(isset($_POST['submit']))
{
if (chk_crypt($_POST['code']))
{
$username = mysqli_real_escape_string($db,$_POST['username']);
$password = mysqli_real_escape_string($db,$_POST['password']);
$password = md5($password); // Encrypted Password
$name = mysqli_real_escape_string($db,$_POST['name']);
$mail = mysqli_real_escape_string($db,$_POST['email']);	 
$query1 = "SELECT * FROM users WHERE user = '$username' OR mail = '$mail' ;";
$result1 = mysqli_query($db,$query1);
$rows=mysqli_num_rows($result1);
if ($rows == "0") {
   $prohibited=array("admin","kandalf","deneme","webmaster","root"); 
if (in_array($username, $prohibited)) {
	echo '<script>alert("Bu kullanıcı ismini alamazsınız !")</script>';
}
else {
$query2 = "INSERT INTO users(id,user,pass,name,mail,fav) values('','$username','$password','$name','$mail','');";
mysqli_query($db,$query2);
echo '<script>alert("Kayıt başarılı !")</script>';
}
}
else {
	echo '<script>alert("Girdiğiniz kullanıcı adı ve/veya e-posta adresi kullanımda !")</script>';
}
}
}
else {
echo '<script>alert("Güvenlik sorusunu yanlış girdiniz !")</script>';	
}
?>
</div>
</body>
</html>
