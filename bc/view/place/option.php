<?php
  $dbname="about";
  include("mysql/connect.php");
  $placeSe =$db->query(PlaceSe());
  $display = $placeSe->fetchAll();
  foreach ($display as $key => $value) {
    $placeName = $value[0];
    echo "<option>$placeName</option>";
  }
  $db=null;
?>
