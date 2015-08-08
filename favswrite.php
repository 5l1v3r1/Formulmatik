<?php
session_start();
$id=$_POST["id"]; //Get POSTed id  
$username=$_SESSION["username"];
$pass=$_SESSION["password"];
$hashed=md5($pass);
include("db.php");
    $query1="UPDATE `pbtflow_fmatik`.`users` SET `fav` = CONCAT_WS(',',fav,'$id') WHERE `users`.`user` = '$username'"; //Add id to fav row.
    $result=mysqli_query($db,$query1);
    if (!$result) {
    die('Could not query:' . mysqli_error($db));
}
else {
echo "$id OK!"; //For Debuggin'   
}
