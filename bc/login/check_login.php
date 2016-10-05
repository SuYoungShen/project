<?php
  session_start();
  include("mysql/connect.php");

  //login_account 登入者帳號
  if (isset($_SESSION["account_level"]) && !empty($_SESSION["account_level"])) {
    //登入者等級
     if ($_SESSION["account_level"]=="admin") {
       header("Location:index.php");
     }else {
       header("Location:login.php");
     }
  }

  function MemberSe($account){
    $MemberSe = "SELECT * FROM `member` WHERE `account`='".$account."'";
    return $MemberSe;
  }

 ?>
