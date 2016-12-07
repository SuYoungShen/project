<?php
  include 'bc/mysql/connect.php';

  $FavSe = $db->query(FavSe($accounts));
  $Dislpay = $FavSe->fetchAll();
  // var_dump($Dislpay);

  foreach ($Dislpay as $key => $value) {

    $Account = $value["Account"];//帳號
    $ViewPoint = $value["place"];//地區名
    $PicName = $value["PicName"];//照片名
    $PicPath = $value["PicPath"];//照片位置
    // $WebSite = $value["WebSite"];//網站位址
    $Datetime = $value["Datetime"];//時間
    $Web = Url($db,$ViewPoint);//網站位址
    if (is_null($Web)) {
      echo "string";
    }else {
      echo $Web;
    }
    print_r($Web);
    var_dump($Web);
    echo "
      <div class='accordion' id='accordion2'>
        <div class='accordion-group'>
          <div class='accordion-heading'>
            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#Favorite$key'>
              $ViewPoint
            </a>

        </div>
          <div id='Favorite$key' class='accordion-body collapse'>
            <div class='accordion-inner'>
              <img src='$PicPath$PicName'>
              <a href='$Web' id='web' value='$Web'>$ViewPoint</a>
              <a onclick='Delete(
                                  \"$Account\",
                                  \"$ViewPoint\",
                                  \"$PicName\",
                                  \"$PicPath\",
                                  \"$Web\"
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

  function Url($db,$ViewPoint){

    $PlaceSe = "SELECT `id`,`place`,`viewpoint`  FROM `places` WHERE `viewpoint`='".$ViewPoint."'";
    $PlaceSes=$db->query($PlaceSe);
    $Displays = $PlaceSes->fetchAll();

    foreach ($Displays as $key => $value) {
      $id = $value["id"];
      $viewpoint = $value["viewpoint"];
      $place_name = $value["place"];

      $true = !empty($id) &&
      !empty($viewpoint) &&
      !empty($place_name);

      if ($true && $ViewPoint==$viewpoint) {

        $Web = "area.php?id=$id&viewpoint=$viewpoint&place_name=$place_name";
        return $Web;

      }
    }




  }

  $db=null;
 ?>
