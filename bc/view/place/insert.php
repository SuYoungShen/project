<?php
  $dbname="view";
  include ("../../mysql/connect.php");
  // include ("common.php");
  // $placeSe = $db->query(PlaceSe());//查詢資料表
  // $display = $placeSe->fetchAll();
  if (isset($_POST["viewpoints"]) && !empty($_POST["viewpoints"])) {
    echo "失敗";
  }else {
    echo "string";
  }

  $db=null;
 ?>
