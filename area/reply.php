<?php

include ("bc/mysql/connect.php");

$id = $_GET["id"];
$viewpoint = $_GET["viewpoint"];
$placeSe = $db->query(Reply($id,$viewpoint));//查詢資料表
$displays = $placeSe->fetchAll();

foreach ($displays as $key => $value) {

  $posted = $value["posted"];
  $message = $value["message"];
  $site = $value["site"];
  $reply = $value["reply"];//回覆
  $datetime = $value["datetime"];
  $replydatetime = $value["replydatetime"];

  if ($replydatetime=="0000-00-00 00:00:00") {
    echo $replydatetime="";
  }
  echo "

  <p>&nbsp;</p>
    <div id='comments' class='comments'>
      <h4>回覆</h4>
      <div class='comments-list'>
        <div class='media box'>
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
            <br>
            <strong>回覆:
              <a href='#'>管理員</a>
            </strong>
            <br>
            <p>$reply</p>
            <small>$replydatetime</small>
          </div>
        <br/>
      </div>
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
