<?php
  $dbname="view";
  include ("../../mysql/connect.php");
  // include ("common.php");
  // $placeSe = $db->query(PlaceSe());//查詢資料表
  // $display = $placeSe->fetchAll();
  $picDir = "../images/";
  $msg = "";

  if (isset($_POST["placeName"]) && !empty($_POST["placeName"])) {

    $placeName = $_POST["placeName"];//地區名
    $viewpoint = empty($_POST["viewpoint"])?"":$_POST["viewpoint"];//景點名
    $attractions = empty($_POST["attractions"])?"":$_POST["attractions"];//景點介紹
    $arrival =  empty($_POST["arrival"])?"":$_POST["arrival"];//如何到達
    
    if ( 0 < $_FILES['file']['error'] ) {
       echo 'Error: ' . $_FILES['file']['error'] . '<br>';
   }else {
     echo "string";
   }
    $msg.="地區名已成功，";
    // if (empty($viewpoint)) {
    //   $msg.="[景點名]";
    // }
    // if (empty($attractions)) {
    //   $msg.="[介紹]";
    // }
    // if (empty($arrival)) {
    //   $msg.="[如何到達]";
    // }
    // echo $msg.="記得補上";
    // if (empty($viewpoint)) {
    //   echo "請記得填";
    // }else {
    //   echo "string";
    // }

  }else {
    echo "失敗";
  }


  $db=null;
 ?>
