<?php
session_start();
$id=$_POST["id"];
$pass=$_SESSION["password"];
$hashed=md5($pass);
$username=$_SESSION["username"];
include("db.php");
$query1 = "SELECT * FROM users WHERE user='$username' AND pass='$hashed' ORDER BY id DESC";
    $result=mysqli_query($db,$query1) or die(mysql_error());
    $num=mysqli_num_rows($result);
    $k = $num;
    if ($k!=0)
    {   
   $row = mysqli_fetch_assoc($result);
   $favid = $row["fav"];      
   }
	 else {
	 	echo "User not found";
	 	}

$favs = explode(",", $favid);
$favs = array_values(array_filter($favs));
if(($key = array_search($id, $favs)) !== false) {
    unset($favs[$key]); //Remove id of formula from list.
 }
$c=implode(",", $favs);
echo $c;    
     $query2 = "UPDATE  `pbtflow_fmatik`.`users` SET  `fav` ='$c' WHERE  `users`.`user` = '$username'";
     mysqli_query($db,$query2) or die(mysqli_error($db)); 
echo "$id OK!"; //For Debuggin'
?>

