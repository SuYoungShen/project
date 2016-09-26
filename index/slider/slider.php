<?php
  $dbname="project";
  include ("bc/mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

$sliderse = $db->query(sliderse());//查詢slider資料表
$display = $sliderse->fetchAll();
$sliderdir='bc/index/slider/images/';//slider放毒片路徑


foreach ($display as $key => $value) {
  $picName = $value[1];
  $picDir = $value[2];
  $picNames = basename($picName,".jpg");
  if (!empty($picName)) {
    $displays = $sliderdir.$picName;
  }else {
    $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  }

  echo "
  <div class='sl-slide item$key' data-orientation='horizontal' data-slice1-rotation='-25' data-slice2-rotation='-25' data-slice1-scale='2' data-slice2-scale='2'>
    <div class='sl-slide-inner'>
      <div class='container'>
        <img class='pull-right' src='$displays' alt='' height='520' width='950'/>
        <h2>$picNames</h2>
        <!-- <h3 class='gap'>Tincidunt condimentum eros</h3>
        <a class='btn btn-large btn-transparent' href='#'>Learn More</a> -->
      </div>
    </div>
  </div>
  ";
}



    // foreach ($rows as $key => $value) { //取得資料庫
    //   echo $key.$value[3]."<br>";//顯示id && 時間
    // }

    if(isset($_POST["clear"])){
      $clear = $_POST["clear"];
      for ($i=0; $i < 6; $i++) {
        $clear = $db->query("UPDATE slider SET
                          name = ' ',
                          datetime = ' '
                        WHERE
                          '".$i."'
                        ");
      }

      $_SESSION["slidernum"] = 0;
      $_SESSION["slidernums"] = 1;

    }

?>
