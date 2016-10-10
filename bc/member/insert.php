<?php
  $dbname = "project";
  include("../mysql/connect.php");
  include ("common.php");

  $true = isset($_POST["email"]) &&
          !empty($_POST["email"]) &&
          isset($_POST["name"]) &&
          !empty($_POST["name"]) &&
          isset($_POST["account"]) &&
          !empty($_POST["account"]) &&
          isset($_POST["password"]) &&
          !empty($_POST["password"]);

  if ($true==true) {
    
    $email=$_POST["email"];
    $name=$_POST["name"];
    $account=$_POST["account"];
    $passowrd=$_POST["password"];

    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetime = date("Y-m-d H:i:s");//時間

    $true = In($db,$account ,$password ,$email ,$name ,$datetime);

    if ($true==true) {
      echo "申請成功";
    }else {
      echo "申請失敗";
    }

  }else {
    echo "空";
  }

  function In($db,$account ,$password ,$email ,$name ,$datetime){
    $memberin = memberInsert($account ,$password ,$email ,$name ,$datetime);//新增會員資料
    $true = $db->query($memberin);
    if ($true) {
      $true=true;
    }else {
      $true=false;
    }
    return $true;
  }
 ?>
