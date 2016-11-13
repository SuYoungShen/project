<?php

  include ("bc/mysql/connect.php");

  $placeSe = $db->query(Places());//查詢資料表
  $display = $placeSe->fetchAll();

  foreach ($display as $key => $value) {
    $picName = $value["name"];
    echo "
        <p>
          <img src='bc/view/place/images/$picName' width='100%' alt='' />
        </p>
    ";
    echo "<p>".$value["attractions"]."</p>";
    echo "<p>".$value["arrival"]."</p>";
  }

  function Places(){
    $place = "SELECT * From `places` where `viewpoint`='".$_GET["viewpoint"]."'";
    return $place;
  }
  $db=null;
 ?>
