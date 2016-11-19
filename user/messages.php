<?php
  include 'bc/mysql/connect.php';
  // echo $accounts;
  $FavSe = $db->query(FavSes($accounts));
  $Dislpay = $FavSe->fetchAll();
  // var_dump($Dislpay);

  foreach ($Dislpay as $key => $value) {

    // $Account = $value["Account"];//帳號
    /* area */
    $Place_Name = $value["placename"];//地區名
    $ViewPoint = $value["viewpoint"];//景點名
    $Posted = $value["posted"];//發表人
    $Theme = $value["theme"];//主題

    /* 景點 area */

    /* 討論區 forum */
    $Message = $value["message"];//訊息
    /* 討論區 forum */

    if (!empty($Place_Name)) {

      echo "
          <legend>景點留言</legend>
          <div class='accordion' id='accordion2'>
            <div class='accordion-group'>
              <div class='accordion-heading'>

                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapses'>
                  $Place_Name
                </a

              </div>
              <div id='collapses' class='accordion-body collapse'>
                <div class='accordion-inner'>

                  <a href='$WebSite'>$Place_Name</a>
                  <a onclick='Delete(
                  \"$Account\",
                  \"$Place_Name\",
                  \"$PicName\",
                  \"$PicPath\",
                  \"$WebSite\"
                  )'>
                  <i class='icon-remove pull-right'></i></a>
                </div>
              </div>
            </div>
          </div>
        ";
    }

    if(!empty($Theme)){
      echo "
      <legend>討論區</legend>
      <div class='accordion' id='accordion2'>
        <div class='accordion-group'>
          <div class='accordion-heading'>

            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapsess'>
              $Theme
            </a>

          </div>
          <div id='collapsess' class='accordion-body collapse'>
            <div class='accordion-inner'>

              <a href='$WebSite'></a>
              <a onclick='Delete(
              \"$Account\",
              \"$Place_Name\",
              \"$PicName\",
              \"$PicPath\",
              \"$WebSite\"
              )'>
              <i class='icon-remove pull-right'></i></a>
            </div>
          </div>
        </div>
      </div>
      ";
    }

    // $PicName = $value["PicName"];//照片名
    // $PicPath = $value["PicPath"];//照片位置
    // $WebSite = $value["WebSite"];//網站位址
    // $Datetime = $value["Datetime"];//時間


  }

  function FavSes($account){
    $FavSe = "SELECT * FROM area,forum WHERE area.posted=(SELECT name FROM member WHERE account='".$account."')";
    // $FavSe = "SELECT * FROM `area` WHERE `posted`=(SELECT);
    return $FavSe;
  }

  $db=null;
 ?>
