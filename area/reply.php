<?php

include ("bc/mysql/connect.php");

$id = $_GET["id"];
$viewpoint = $_GET["viewpoint"];
$placeSe = $db->query(Reply($id,$viewpoint));//查詢資料表
$display = $placeSe->fetchAll();


foreach ($display as $key => $value) {

  $posted = $value["posted"];
  $message = $value["message"];
  $site = $value["site"];
  $datetime = $value["datetime"];
  $replydatetime = $value["replydatetime"];

  if ($replydatetime=="0000-00-00 00:00:00") {
    echo $replydatetime="";
  }
  echo "
        <div class='media-body'>
          <strong>發表人:
            <a href='#'>$posted</a>
          </strong>
          <br>
          <p>$message</p>
          <strong>參考網址:
            <a href='$site'>$site</a>
          <strong>
          <br/>
          <small>$datetime</small>
          <br>
          <strong>回覆:
            <a href='#'>管理員</a>
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
