<?php

include ("bc/mysql/connect.php");

$id = $_GET["id"];
$viewpoint = $_GET["viewpoint"];
$placeSe = $db->query(Reply($id,$viewpoint));//查詢資料表
$display = $placeSe->fetchAll();


foreach ($display as $key => $value) {

  $posted = $value["posted"];
  $message = $value["message"];
  $datetime = $value["datetime"];
  $replydatetime = $value["replydatetime"];


  echo "
        <div class='media-body'>
          <strong>發表人:
            <a href='#'>$posted</a>
          </strong>
          <br>
          <p>$message</p>
          <small>$datetime</small>
          <br>
          <strong>回覆:
            <a href='#'>$posted</a>
          </strong>
          <br>
          <small>$replydatetime</small>

        </div>
        <br/>
    ";
}

function Reply($id, $viewpoint){
  $place = "SELECT * From `area` where `viewpoint`='".$viewpoint."'";
  return $place;
}
$db=null;
 ?>
