<?php
  include 'bc/mysql/connect.php';

  $FavSe = $db->query(FavSe($accounts));
  $Dislpay = $FavSe->fetchAll();
  // var_dump($Dislpay);
  $WebSite="/project/index.php";

  foreach ($Dislpay as $key => $value) {

    $Account = $value["Account"];//帳號
    $ViewPoint[$key] = $value["place"];//地區名
    $PicName = $value["PicName"];//照片名
    $PicPath = $value["PicPath"];//照片位置
    // $WebSite = $value["WebSite"];//網站位址
    $Datetime = $value["Datetime"];//時間
    $Webs = $Web[$key] = Url($db,$ViewPoint[$key]);//網站位址

    // var_dump($Web[$key]);
    echo "
      <div class='accordion' id='accordion2'>
        <div class='accordion-group'>
          <div class='accordion-heading'>
            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#Favorite$key'>
              $ViewPoint[$key]
            </a>

        </div>
          <div id='Favorite$key' class='accordion-body collapse'>
            <div class='accordion-inner'>
              <img src='$PicPath$PicName'>
              <a href='$Webs' onclick='Test(\"$Web[$key]\")'>$ViewPoint[$key]</a>
              <input type='hidden' id='web' value='$Webs'>
              <a onclick='Delete(
                                  \"$Account\",
                                  \"$ViewPoint[$key]\",
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

  // for ($i=0; $i < count($Web); $i++) {
  //   if (is_null($Web[$i])) {
  //     echo "
  //     <script>
  //     $(document).ready(function() {
  //       $('a#web').click(function(){
  //         alert('ss');
  //       });
  //     });
  //
  //     </script>
  //     ";
  //   }else {
  //
  //   }
  // }
  function FavSe($account){
    $FavSe = "SELECT * FROM `favorite` WHERE `Account`='".$account."'";
    return $FavSe;
  }

  function Url($db,$ViewPoint){

    $PlaceSe = "SELECT `id`,`place`,`viewpoint`  FROM `places` WHERE `viewpoint`='".$ViewPoint."'";
    $PlaceSes=$db->query($PlaceSe);
    $Displays = $PlaceSes->fetchAll();

    foreach ($Displays as $key => $value) {

      $id = $ids[$key] = $value["id"];
      $viewpoint = $viewpoints[$key] = $value["viewpoint"];
      $place_name = $place_names[$key] = $value["place"];

      // $true = isset($id)&&
      //         !empty($id) &&
      //         isset($viewpoint)&&
      //         !empty($viewpoint) &&
      //         isset($place_name)&&
      //         !empty($place_name);

      // if ($true && $ViewPoint==$viewpoint) {
      //   $Web = "area.php?id=$id&viewpoint=$viewpoint&place_name=$place_name";
      //   return $Web;
      // }else {
      //   $Web="2";
      //   return $Web;
      //
      // }


    }

    if (isset($id)) {
      echo "string";
    }else {
      return $Web='2';
    }
  }

  $db=null;
 ?>
