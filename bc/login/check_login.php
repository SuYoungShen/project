<?php
  // session_start();
  // include("mysql/connect.php");

  //login_account 登入者帳號
  // if (isset($_SESSION["account_level"]) && !empty($_SESSION["account_level"])) {
  //   //登入者等級
  //    if ($_SESSION["account_level"]=="admin") {
  //      header("Location:index.php");
  //    }else {
  //      header("Location:login.php");
  //    }
  //
  // }else {
  //   header("Location:login.php");
  // }
  // if (isset($_POST["login_account"])) {
  //   $account = $_POST["login_account"];
  //   $_SESSION["login_account"] = $account;
  //   $query_RecLogin = "SELECT * FROM `member` WHERE `account`='".$account."'";
  //   $RecLogin = $db->query($query_RecLogin);
  //
  //   $display = $RecLogin->fetch();
  //   $level = $display["level"];
  //   $_SESSION["account_level"] = $level;
  //   if ($level=="admin") {
  //     header("Location:index.php");
  //   }
  // }
  function Login_Out(){
    if (isset($_GET["login_out"]) && ($_GET["login_out"]=="true")) {
      unset($_SESSION["login_account"]);
      header("Location:login.php");
    }
  }
  function Login($db){

    if (isset($_POST["login_account"])) {

      $account = $_POST["login_account"];//帳號
      $_SESSION["login_account"] = $account;

      $RecLogin = $db->query(MemberSe($account));

      $display = $RecLogin->fetch();
      $level = $display["level"];
      $_SESSION["account_level"] = $level;
      if ($level=="admin") {
        header("Location:index.php");
      }
    }
  }
  function Login_Check(){

    if (!isset($_SESSION["login_account"]) || empty($_SESSION["login_account"])) {
      header("Location:login.php");
    }
  }

  function MemberSe($account){
    $MemberSe = "SELECT * FROM `member` WHERE `account`='".$account."'";
    return $MemberSe;
  }

 ?>
