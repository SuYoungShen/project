<?php
  $dbname="project";
  include ("bc/mysql/connect.php");
  include ("common.php");

  $aboutse = $db->query(AboutSe());

  $AboutDisplay = $aboutse->fetchAll();

  foreach ($AboutDisplay as $key => $AboutDisplays) {
  }

  if (!isset($AboutDisplays[0])) {
    $AboutDisplays[0]="暫無資料";
  }
  echo $AboutDisplays[0];


  // if (isset($displays[0])) {
  //   if (is_null($displays[0])) {
  //     echo $displays[0] = "暫無資料";
  //   }else {
  //     echo $displays[0];
  //   }
  // }

  $db=null;
?>
