<?php
include ("mysql/connect.php");//連接資料庫
include ("common.php");//常用語法

$carouselDir='about/carousel/images/';
$carouselSe = $db->query(carouselSe());//查詢top資料表
$display = $carouselSe->fetchAll();//顯示
$carouselBasename = basename($_SERVER["PHP_SELF"]);//目前的檔案名稱

if (!isset($_SESSION["carouselnum"]) && !isset($_SESSION["carouselnums"])) {
  $_SESSION["carouselnum"] = 0;
  $_SESSION["carouselnums"] = 1;
}

if (isset($_FILES["carousel"])) {

  foreach($_FILES["carousel"]["tmp_name"] as $key => $carousel_tmp_name){//檔案以陣列方式接收

    $carousel_error = $_FILES["carousel"]["error"][$key];//取得錯誤值

    if ($carousel_error == 4 ) {//判斷是否有錯誤

      message("不小心按到送出了齁",$carouselBasename);

    }else if($carousel_error == 0){

      $carousel_name = $_FILES["carousel"]["name"][$key];//抓取檔案名稱
      $carousel_tmp = $_FILES["carousel"]["tmp_name"][$key];//抓取檔案
      $carousel_size = $_FILES["carousel"]["size"][$key];//抓取檔案大小
      $carousel_tmps = strrchr($carousel_name,".");//取得檔案的副檔名
      $carouseltmp = array('.jpg', '.JPG', '.png', '.PNG'
      , '.bmp', '.gif');//設定副檔名

      if (!in_array($carousel_tmps,$carouseltmp)) {//檢查副檔名

        $carouseltmp = "不好意思,只接受".implode(" ",$carouseltmp)."的副檔名";
        message($carouseltmp,$carouselBasename);      
        break;

      }else if($carousel_size > 2097152){//檢查檔案大小

        $carouselsize = basename($carousel_name,"$carousel_tmps");
        message($carouselsize."檔案已超過2MB",$carouselBasename);

        break;
      }

      date_default_timezone_set('Asia/Taipei');//設定時間為台北
      $datetime = date("Y-m-d H:i:s");//時間

      if(file_exists($carouselDir.$carousel_name)){//檢查是否有相同檔案

        $carouselName = basename($carousel_name,"$carousel_tmps");//去除副檔名,留檔名
        message("資料夾裡已有名稱".$carouselName."的檔案",$carouselBasename);

      }else{

        move_uploaded_file($carousel_tmp,$carouselDir.$carousel_name);//把檔案移到指定dir

        foreach ($display as $keys => $value) {
          // echo "keys:".$keys;
          $carouselid[$keys] = $value[0];//取id
          $carouseltimes[$keys] = $value[3];//取時間
        }
        $rowsc = count($display);//計算總共有幾筆資料

        //時間比對
        if (isset($_SESSION["carouselnum"]) && isset($_SESSION["carouselnums"])) {

          $carouselnum = $_SESSION["carouselnum"];
          $carouselnums = $_SESSION["carouselnums"];

          if ($carouselnum > ($rowsc-1)) {

            $_SESSION["carouselnum"] = 0;
            $carouselnum = $_SESSION["carouselnum"];

          }

          if ($carouselnums > ($rowsc-1)) {
            $_SESSION["carouselnums"] = 0;
            $carouselnums = $_SESSION["carouselnums"];

          }
          //時間比對

          $carouseltime = strtotime($carouseltimes["$carouselnum"]) < strtotime($carouseltimes["$carouselnums"]);
          $carouseltimess = strtotime($carouseltimes["$carouselnum"]) == strtotime($carouseltimes["$carouselnums"]);

          if($carouseltime || $carouseltimess){

            $carouselup = carouselUp($carousel_name, $carouselDir, $datetime, $carouselid["$carouselnum"], $key);//更新檔名
            $db->query($carouselup);//執行更新指令
            message("新增成功",$carouselBasename);
          }else {

            $carouselup = carouselUp($carousel_name, $carousel6dir, $datetime, $carouselid["$carouselnums"], $key);//更新檔名
            $db->query($carouselup);//執行更新指令
            message("新增成功",$carouselBasename);
          }
          $_SESSION["carouselnum"]++;
          $_SESSION["carouselnums"]++;

        }//if(session["carouselnum"])
      }//else
    }//$carousel_error
  }//foreach
}//FILE["carousel"]


foreach ($display as $key => $value) {

  $displays = $value[1];

  echo "
  <li>
    <a href='about/carousel/images/$displays' title='景點名' data-rel='colorbox'>
      <img width='150' height='150' alt='150x150' src='about/carousel/images/$displays' />
      <div class='text'>
        <div class='inner'>景點名</div>
      </div>
    </a>

    <div class='tools tools-top'>
      <a href='#'>
        <i class='ace-icon fa fa-link'></i>
      </a>

      <a href='#'>
        <i class='ace-icon fa fa-paperclip'></i>
      </a>

      <a href='#'>
        <i class='ace-icon fa fa-pencil'></i>
      </a>

      <a href='#'>
        <i class='ace-icon fa fa-times red'></i>
      </a>
    </div>
  </li>
  ";
}

if(isset($_POST["clear"])){
  $clear = $_POST["clear"];
  for ($i=0; $i < 6; $i++) {
    $clear = $db->query("UPDATE carousel SET
                      name = ' ',
                      datetime = ' '
                    WHERE
                      '".$i."'
                    ");
  }
  $_SESSION["carouselnum"] = 0;
  $_SESSION["carouselnums"] = 1;
}

$db = null;
 ?>