<?php
  include 'bc/mysql/connect.php';
  // echo $accounts;
  $AreaSe = $db->query(FavSes($accounts));
  $ForumSe = $db->query(FavSess($accounts));
  $AreaDislpay = $AreaSe->fetchAll();
  $ForumDislpay = $ForumSe->fetchAll();
  // var_dump($Dislpay);

  echo "<legend>景點留言</legend>";
  foreach ($AreaDislpay as $key => $value) {

    // $Account = $value["Account"];//帳號
    /* 景點area */
    $Place_Name = $value["placename"];//地區名
    $ViewPoint = $value["viewpoint"];//景點名
    $Posted = $value["posted"];//發表人
    $AreaMessage = $value["message"];//訊息
    $AreaDate = $value["datetime"];//時間
    /* 景點 area */

    if (!empty($Place_Name)) {

      echo "
          <div class='accordion' id='accordion2'>
            <div class='accordion-group'>
              <div class='accordion-heading'>

                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapses'>
                  $Place_Name
                </a>

              </div>
              <div id='collapses' class='accordion-body collapse'>
                <div class='accordion-inner'>
                景點名：
                  <a href='$WebSite'>$ViewPoint</a>
                  <a onclick='Delete(
                  \"$Account\",
                  \"$Place_Name\",
                  \"$PicName\",
                  \"$PicPath\",
                  \"$WebSite\"
                  )'>
                  <i class='icon-remove pull-right'></i></a><br/>
                  <p>留言：$AreaMessage</p>
                  <p>時間：$AreaDate</p>
                </div>
              </div>
            </div>
          </div>
        ";
    }

    // if(!empty($Theme)){
    //   echo "
    //   <legend>討論區</legend>
    //   <div class='accordion' id='accordion2'>
    //     <div class='accordion-group'>
    //       <div class='accordion-heading'>
    //
    //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapsess'>
    //           $Theme
    //         </a>
    //
    //       </div>
    //       <div id='collapsess' class='accordion-body collapse'>
    //         <div class='accordion-inner'>
    //
    //           <a href='$WebSite'></a>
    //           <a onclick='Delete(
    //           \"$Account\",
    //           \"$Place_Name\",
    //           \"$PicName\",
    //           \"$PicPath\",
    //           \"$WebSite\"
    //           )'>
    //           <i class='icon-remove pull-right'></i></a>
    //         </div>
    //       </div>
    //     </div>
    //   </div>
    //   ";
    // }



  }

  echo "<legend>討論區</legend>";
  foreach ($ForumDislpay as $key => $value) {

    // $Account = $value["Account"];//帳號
    /* 景點area */
    // $Place_Name = $value["placename"];//地區名
    // $ViewPoint = $value["viewpoint"];//景點名
    // $Posted = $value["posted"];//發表人
    // $AreaMessage = $value["message"];//訊息
    // $AreaDate = $value["datetime"];//時間

    /* 景點 area */

    /* 討論區 forum */
    $Theme = $value["theme"];//主題
    $ForumMessages = $value["messages"];//訊息
    $Reply = $value["reply"];//回覆
    $ForDate = $value["datetimes"];//時間
    /* 討論區 forum */

    if (!empty($Place_Name)) {

      echo "
          <div class='accordion' id='accordion2'>
            <div class='accordion-group'>
              <div class='accordion-heading'>

                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapses'>
                  $Theme
                </a>

              </div>
              <div id='collapses' class='accordion-body collapse'>
                <div class='accordion-inner'>
                景點名：
                  <a href='$WebSite'>$ViewPoint</a>
                  <a onclick='Delete(
                  \"$Account\",
                  \"$Place_Name\",
                  \"$PicName\",
                  \"$PicPath\",
                  \"$WebSite\"
                  )'>
                  <i class='icon-remove pull-right'></i></a><br/>
                  <p>留言：$ForumMessages</p>
                  <p>回覆：$Reply</p>
                  <p>時間：$ForDate</p>
                </div>
              </div>
            </div>
          </div>
        ";
    }

    // if(!empty($Theme)){
    //   echo "
    //   <legend>討論區</legend>
    //   <div class='accordion' id='accordion2'>
    //     <div class='accordion-group'>
    //       <div class='accordion-heading'>
    //
    //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapsess'>
    //           $Theme
    //         </a>
    //
    //       </div>
    //       <div id='collapsess' class='accordion-body collapse'>
    //         <div class='accordion-inner'>
    //
    //           <a href='$WebSite'></a>
    //           <a onclick='Delete(
    //           \"$Account\",
    //           \"$Place_Name\",
    //           \"$PicName\",
    //           \"$PicPath\",
    //           \"$WebSite\"
    //           )'>
    //           <i class='icon-remove pull-right'></i></a>
    //         </div>
    //       </div>
    //     </div>
    //   </div>
    //   ";
    // }



  }


  function FavSes($account){
    $FavSe = "SELECT * FROM area WHERE area.posted=(SELECT name FROM member WHERE account='".$account."')";
    // $FavSe = "SELECT * FROM `area` WHERE `posted`=(SELECT);
    return $FavSe;
  }
  function FavSess($account){
    $FavSes = "SELECT * FROM forum WHERE forum.posted=(SELECT name FROM member WHERE account='".$account."')";
    // $FavSe = "SELECT * FROM `area` WHERE `posted`=(SELECT);
    return $FavSes;
  }

  $db=null;
 ?>
