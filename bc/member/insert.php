<?php
  $dbname = "project";
  include("../mysql/connect.php");
  include ("common.php");

  // if (isset($_POST["password"]) && !empty($_POST["password"])) {
  //   $accounts = $_POST["account"];
  //   $passwords = $_POST["password"];
  //   $db->query(memberInsert($accounts ,$passwords));
  //   echo "成功";
  // }
  $true = isset($_POST["email"]) &&
          !empty($_POST["email"]) &&
          isset($_POST["name"]) &&
          !empty($_POST["name"]) &&
          isset($_POST["account"]) &&
          !empty($_POST["account"]) &&
          isset($_POST["password"]) &&
          !empty($_POST["password"]);


  if ($true==true) {

    $emails=$_POST["email"];
    $names=$_POST["name"];
    $accounts=$_POST["account"];
    $passowrds=$_POST["password"];

    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetimes = date("Y-m-d H:i:s");//時間

    $true = In($db,$accounts ,$passowrds ,$emails ,$names ,$datetimes);

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

  // function memberInsert($account ,$password ,$email ,$name ,$datetime)
  // {
  //
  //   $memberin ="INSERT INTO `member`
  //                           (
  //                             `account`,
  //                             `password`,
  //                             `email`,
  //                             `name`,
  //                             `datetime`
  //                           )
  //                           VALUES
  //                           (
  //                             '$account',
  //                             '$password',
  //                             '$email',
  //                             '$name',
  //                             '$datetime'
  //                           )";
  //
  //   return $memberin;
  // }
  // function In($db,$account ,$password ,$email ,$name ,$datetime){
  //   $memberin = memberInsert($account ,$password ,$email ,$name ,$datetime);//新增會員資料
  //   $true = $db->query($memberin);
  //   if ($true) {
  //     $true=true;
  //   }else {
  //     $true=false;
  //   }
  //   return $true;
  // }
 ?>
