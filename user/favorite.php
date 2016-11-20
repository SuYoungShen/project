<?php
  include 'bc/mysql/connect.php';

  $FavSe = $db->query(FavSe($accounts));
  $Dislpay = $FavSe->fetchAll();
  // var_dump($Dislpay);

  foreach ($Dislpay as $key => $value) {

    $Account = $value["Account"];//帳號
    $Place_Name = $value["place"];//地區名
    $PicName = $value["PicName"];//照片名
    $PicPath = $value["PicPath"];//照片位置
    $WebSite = $value["WebSite"];//網站位址
    $Datetime = $value["Datetime"];//時間

    echo "
      <div class='accordion' id='accordion2'>
        <div class='accordion-group'>
          <div class='accordion-heading'>
            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#Favorite$key'>
              $Place_Name
            </a>

        </div>
          <div id='Favorite$key' class='accordion-body collapse'>
            <div class='accordion-inner'>
              <img src='$PicPath$PicName'>
              <a href='$WebSite'>$Place_Name</a>
              <a onclick='Delete(
                                  \"$Account\",
                                  \"$Place_Name\",
                                  \"$PicName\",
                                  \"$PicPath\",
                                  \"$WebSite\"
                                  )'>
              <i class='icon-remove pull-right'></i></a><!--刪除-->
            </div>
          </div>
        </div>
      </div>
    ";

  }

  function FavSe($account){
    $FavSe = "SELECT * FROM `favorite` WHERE `Account`='".$account."'";
    return $FavSe;
  }

  $db=null;
 ?>
