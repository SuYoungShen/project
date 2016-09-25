<?php
  $dbname="about";
  include ("bc/mysql/connect.php");
  include ("common.php");

  $aboutse = $db->query(AboutSe());

  $display = $aboutse->fetchAll();

  foreach ($display as $key => $displays) {
  }

  if (!isset($displays[0])) {
    $displays[0]="空";
  }
  echo $displays[0];


  // if (isset($displays[0])) {
  //   if (is_null($displays[0])) {
  //     echo $displays[0] = "暫無資料";
  //   }else {
  //     echo $displays[0];
  //   }
  // }

  $db=null;
?>
