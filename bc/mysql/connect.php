<?php
$localhost = "localhost";
$username = "root";
$password = "123456";

$db = mysqli_connect($localhost,$username,$password)
      or die("無法連線");

      mysqli_query($db,"SET NAMES 'UTF8'");
?>
