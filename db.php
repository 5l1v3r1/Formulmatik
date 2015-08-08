<?php
$mysql_hostname = "";
$mysql_user = "";
$mysql_password = "";
$mysql_database = "";
$db = mysqli_connect($mysql_hostname, $mysql_user,$mysql_password,$mysql_database);
if(!$db) {
    echo 'Mysqli bağlantı hatası: ' . mysqli_connect_errno();
    exit;
}
?>
