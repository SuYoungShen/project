<?php

  include ("bc/mysql/connect.php");
  include 'login/login_account_In.php';

  $placeSe = $db->query(Places());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/view/place/images/";//照片位置

  foreach ($display as $key => $value) {
    // places
    $picName = $value["name"];
    $Pic = $picDir.$picName;
    $viewpoint = $value["viewpoint"];
    $datetime = $value["datetime"];
    // places

    // area
    $posted = $value["posted"];
    $message = $value["message"];
    $site = $value["site"];
    $datetimes = $value["datetimes"];
    $reply = $value["reply"];
    $replydatetime = $value["replydatetime"];
    // area
    $id = $_GET['id'];
    $place_name = $_GET['place_name'];
    $viewpoints = $_GET['viewpoint'];
    $Site = $_SERVER['PHP_SELF']."?id=$id&viewpoint=$viewpoints&place_name=$place_name";

    if (isset($picName) && !empty($picName)) {
      $displays = $picDir.$picName;
    }else {
      $displays = $picDir."wait.jpg";
    }

    $_GET["picname"] = $displays;
    echo "<a href='#'><h2>$viewpoint</h2></a>";
    echo "
    <p>
    <img src='$displays' width='100%' alt='' />
    </p>
    ";
    echo "<p>景點介紹:<br/>".$value["attractions"]."</p>";
    echo "<p>如何到達:<br/>".$value["arrival"]."</p>";
    echo "
    <p>&nbsp;</p>
    <div id='comments' class='comments'>

      <h4>回覆</h4>
      <div class='comments-list'>
        <div class='media box'>
    ";
    if (empty($reply)) {
      $reply = "(等待回覆)";
    }
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
        <small>$datetimes</small>
      <br>
      <br>
        <strong>回覆:
          <a href='#'>管理員</a>
        </strong>
      <br>
        <p>$reply</p>
        <small>$replydatetime</small>
      </div>
      </div>
    </div>
    <br/>
    <div class='comment-form'>
      <h4>請留言</h4>

      <form name='comment-form' method='post' action='bc/message/area/insert.php'>
        <div class='row-fluid'>
          <div class='span4'>
          <input type='hidden' name='id' value='$id'>
          <input type='hidden' name='place_name' value='$place_name'>
          <input type='hidden' name='viewpoint' value='$viewpoint'>
          <input type='hidden' name='pic' value='$Pic'>
          <input type='hidden' name='WebSite' value='$Site'>
          <input type='text' name='posted'  class='input-block-level' value='$login_names' placeholder='姓名(抓取會員名)' />
       </div>
      ";

  }


  function Places(){
    $place = "SELECT * From
                            `places`,`area`
                      where
                            places.place='".$_GET["place_name"]."' AND
                            area.viewpoint='".$_GET["viewpoint"]."'
                            ";
    return $place;
  }

  $db=null;
 ?>
