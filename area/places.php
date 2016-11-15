<?php

  include ("bc/mysql/connect.php");

  $placeSe = $db->query(Places());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/view/place/images/";//照片位置

  foreach ($display as $key => $value) {
      $picName = $value["name"];
    if (isset($picName) && !empty($picName)) {
      $displays = $picDir.$picName;
    }else {
      $displays = $picDir."wait.jpg";
    }

    echo "
        <p>
          <img src='$displays' width='100%' alt='' />
        </p>
    ";
    echo "<p>".$value["attractions"]."</p>";
    echo "<p>".$value["arrival"]."</p>";
  }

  function Places(){
    $place = "SELECT * From `places` where `id`='".$_GET["id"]."'";
    return $place;
  }
  $db=null;
 ?>
