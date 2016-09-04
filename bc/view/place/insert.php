<?php
  $dbname="view";
  include ("../../mysql/connect.php");
  // include ("common.php");
  // $placeSe = $db->query(PlaceSe());//查詢資料表
  // $display = $placeSe->fetchAll();
  if (isset($_POST["viewpoints"]) && !is_null($_POST["viewpoints"])) {
    $placeName = $_POST["placeNames"];//地區名
    $viewpoint = $_POST["viewpoints"];//景點名
    $msg="";
     
     //景點介紹



    echo $msg;
  }//$_POST["viewpoints"]

  $db=null;
 ?>
