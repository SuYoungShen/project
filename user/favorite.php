<?php
  include 'bc/mysql/connect.php';

  $FavSe = $db->query(FavSe($accounts));
  $Dislpay = $FavSe->fetchAll();
  // var_dump($Dislpay);

  foreach ($Dislpay as $key => $value) {

    $Account = $value["Account"];//帳號
    $Place_Name = $value["Place_Name"];//地區名
    $PicName = $value["PicName"];//照片名
    $PicPath = $value["PicPath"];//照片位置
    $WebSite = $value["WebSite"];//網站位址
    $Datetime = $value["Datetime"];//時間

    echo "
      <div class='accordion' id='accordion2'>
        <div class='accordion-group'>
          <div class='accordion-heading'>
            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapse$key'>
              $Place_Name
            </a>

        </div>
          <div id='collapse$key' class='accordion-body collapse'>
            <div class='accordion-inner'>
              <img src='$PicPath$PicName'>
              <a href='$WebSite'>$Place_Name</a>
              <a onclick='Delete(
                                  \"$Account\",
                                  \"$Place_Name\",
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
  //
  // echo "
  //   <div class='accordion' id='accordion2'>
  //     <div class='accordion-group'>
  //       <div class='accordion-heading'>
  //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseOne'>
  //           景點名
  //         </a>
  //       </div>
  //       <div id='collapseOne' class='accordion-body collapse'>
  //         <div class='accordion-inner'>
  //           <img src='http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png'>
  //           景點介紹
  //         </div>
  //       </div>
  //     </div>
  //     <div class='accordion-group'>
  //       <div class='accordion-heading'>
  //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseTwo'>
  //           景點名
  //         </a>
  //       </div>
  //       <div id='collapseTwo' class='accordion-body collapse'>
  //         <div class='accordion-inner'>
  //           <img src='http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png'>
  //           景點介紹
  //         </div>
  //       </div>
  //     </div>
  //   </div>
  // ";

  function FavSe($account){
    $FavSe = "SELECT * FROM `favorite` WHERE `Account`='".$account."'";
    return $FavSe;
  }

  $db=null;
 ?>
