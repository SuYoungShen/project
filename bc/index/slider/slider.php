<?php

  $dbname="project";
  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

  $top6dir='index/slider/images/';
  $topbasename = basename($_SERVER["PHP_SELF"]);

if (!isset($_SESSION["slidernum"]) && !isset($_SESSION["slidernums"])) {
  $_SESSION["slidernum"] = 0;
  $_SESSION["slidernums"] = 1;
}

  $toptime = $db->query(sliderse());
  $display = $toptime->fetchAll();


  if (isset($_FILES["slider"])) {

    foreach($_FILES["slider"]["tmp_name"] as $key => $top6_tmp_name){//檔案以陣列方式接收
      // echo "key:".$key;
      $top6_error = $_FILES["slider"]["error"][$key];//取得錯誤值

      if ($top6_error == 4 ) {//判斷是否有錯誤

        // message($pictmp,$Basename);

        echo "
        <script>
          var value = '不小心按到送出了齁~~~';
          var basename= '$topbasename';
          alerts(value,basename);
        </script>
        ";

      }else if($top6_error == 0){

        $top6_name = $_FILES["slider"]["name"][$key];//抓取檔案名稱
        $top6_tmp = $_FILES["slider"]["tmp_name"][$key];//抓取檔案
        $top6_size = $_FILES["slider"]["size"][$key];//抓取檔案大小
        $top6_tmps = strrchr($top6_name,".");//取得檔案的副檔名

        $toptmp = array('.jpg', '.JPG', '.png', '.PNG'
                        , '.bmp', '.gif');//設定副檔名

        if (!in_array($top6_tmps,$toptmp)) {//檢查副檔名

          $toptmp = "不好意思,只接受".implode(" ",$toptmp)."的副檔名";
          echo "
          <script>
          var value = '$toptmp';
          var basename= '$topbasename';
          alerts(value, basename);
          </script>";
          break;

        }else if($top6_size > 2097152){//檢查檔案大小

          $topsize = $top6_name."檔案已超過2MB";
          echo "
          <script>
          var value = '$topsize';
          var basename= '$topbasename';
          alerts(value, basename);
          </script>";
          break;
        }

        date_default_timezone_set('Asia/Taipei');//設定時間為台北
        $date = date("Y-m-d H:i:s");//時間

        // if(file_exists($top6dir.$top6_name)){//檢查是否有相同檔案
        //
        //   $topname = basename($top6_name,"$top6_tmps");//去除副檔名,留檔名
        //   $value = "資料夾裡已有名稱{$topname}的檔案";
        //
        //   echo "
        //   <script>
        //   var value = '$value';
        //   var basename= '$topbasename';
        //
        //   alerts(value, basename);
        //   </script>
        //   ";
        //
        // }else {

          move_uploaded_file($top6_tmp,$top6dir.$top6_name);//把檔案移到指定dir

          foreach ($display as $keys => $value) {
            // echo "keys:".$keys;
            $topid[$keys] = $value['id'];//取id
            $toptimes[$keys] = $value['datetime'];//取時間
          }
          $displayc = count($display);//計算總共有幾筆資料
          //時間比對
          if (isset($_SESSION["slidernum"]) && isset($_SESSION["slidernums"])) {

            $topnum = $_SESSION["slidernum"];
            $topnums = $_SESSION["slidernums"];

            if ($topnum > ($displayc-1)) {

              $_SESSION["slidernum"] = 0;
              $topnum = $_SESSION["slidernum"];

            }

            if ($topnums > ($displayc-1)) {
              $_SESSION["slidernums"] = 0;
              $topnums = $_SESSION["slidernums"];

            }
            //時間比對
            $toptime = strtotime($toptimes["$topnum"]) < strtotime($toptimes["$topnums"]);
            $toptimess = strtotime($toptimes["$topnum"]) == strtotime($toptimes["$topnums"]);

            if($toptime || $toptimess){

              $topup = sliderup($top6_name, $top6dir, $date, $topid["$topnum"]);//更新檔名
              $db->query($topup);//執行更新指令
              message("上傳成功",$topbasename);
            }else {

              $topup = sliderup($top6_name, $top6dir, $date, $topid["$topnums"]);//更新檔名
              $db->query($topup);//執行更新指令
              message("上傳成功",$topbasename);
            }
            $_SESSION["slidernum"]++;
            $_SESSION["slidernums"]++;

          }//if(session["topnum"])
        // }//else
      }//if($top6_error)
    }//foreach
  }//FILE["top6"]


  foreach ($display as $key => $value) {
    $picName = $value["name"];
    $picDir = $value["path"];
    $picNames = basename($picName,".jpg");
    if (!empty($picName) && !empty($picDir)) {
      $display = $picDir.$picName;
    }else {
      $display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
    }
    echo "
    <div class='sl-slide item$key' data-orientation='horizontal' data-slice1-rotation='-25' data-slice2-rotation='-25' data-slice1-scale='2' data-slice2-scale='2'>
      <div class='sl-slide-inner'>

          <img src='$display' alt='' style='width:100%;height:100%'/>
          <!--<h2>$picNames</h2>-->
          <!-- <h3 class='gap'>Tincidunt condimentum eros</h3>
          <a class='btn btn-large btn-transparent' href='#'>Learn More</a> -->

      </div>
    </div>
    ";
  }


  // while ($row = $topse->fetch()) {
  //   $top6 = $row[1];
  //   echo "
  //   <li>
  //     <a href='index/top6/images/$top6' title='$top6' data-rel='colorbox'>
  //       <img width='150' height='150' alt='150x150' src='index/top6/images/$top6'/>
  //       <div class='text'>
  //         <div class='inner'>$top6</div>
  //       </div>
  //     </a>
  //
  //     <div class='tools tools-top'>
  //       <a href='#'>
  //         <i class='ace-icon fa fa-pencil'></i>
  //       </a>
  //
  //       <a href='#'>
  //         <i class='ace-icon fa fa-times red'></i>
  //       </a>
  //     </div>
  //   </li>
  //   ";
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
$db = null;
?>
