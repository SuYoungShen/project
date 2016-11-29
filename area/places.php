<?php

  include ("bc/mysql/connect.php");

  $placeSe = $db->query(Places());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/view/place/images/";//照片位置

  foreach ($display as $key => $value) {
    // places
      $picName = $value["name"];
      $viewpoint = $value["viewpoint"];
      $datetime = $value["datetime"];
  // places

  // area
      // $posted = $value["posted"];
      // $message = $value["message"];
      // $site = $value["site"];
      // $reply = $value["replydatetime"];
  // area

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

    // echo "
    //
    // <p>&nbsp;</p>
    //   <div id='comments' class='comments'>
    //     <h4>回覆</h4>
    //     <div class='comments-list'>
    //       <div class='media box'>
    //         <div class='media-body'>
    //           <strong>發表人:
    //             <a href='#'>$posted</a>
    //           </strong>
    //           <br>
    //           <p>$message</p>
    //           <strong>參考網址:
    //             <a href='$site'>$site</a>
    //           <strong>
    //           <br/>
    //           <small>$datetime</small>
    //           <br>
    //           <br>
    //           <strong>回覆:
    //             <a href='#'>管理員</a>
    //           </strong>
    //           <br>
    //           <p>$reply</p>
    //           <small>$replydatetime</small>
    //         </div>
    //       <br/>
    //     </div>
    //   </div>
    //   <br/>
    //   ";
  }
  // include("area/reply.php");

  function Places(){
    $place = "SELECT * From
                            `places`
                      where
                            places.place='".$_GET["place_name"]."'
                            ";
    return $place;
  }
  // function Places(){
  //   $place = "SELECT * From `places` where `place`='".$_GET["place_name"]."'";
  //   return $place;
  // }
  $db=null;
 ?>
