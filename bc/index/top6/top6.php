<?php

  $dbname="top";
  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

  $top6dir='index/top6/images/';
  $topbasename = basename($_SERVER["PHP_SELF"]);
  
if (!isset($_SESSION["topnum"]) && !isset($_SESSION["topnums"])) {
  $_SESSION["topnum"] = 0;
  $_SESSION["topnums"] = 1;
}

  $toptime = $db->query(topse());
  $rows = $toptime->fetchAll();

  if (isset($_FILES["top6"])) {

    foreach($_FILES["top6"]["tmp_name"] as $key => $top6_tmp_name){//檔案以陣列方式接收
      // echo "key:".$key;
      $top6_error = $_FILES["top6"]["error"][$key];//取得錯誤值

      if ($top6_error == 4 ) {//判斷是否有錯誤

        // message($pictmp,$Basename);

        echo "
        <script>
        var value = '不小心按到送出了齁~~~';
        var basename= '$topbasename';
        alerts(value,basename);
        </script>";

      }else if($top6_error == 0){

        $top6_name = $_FILES["top6"]["name"][$key];//抓取檔案名稱
        $top6_tmp = $_FILES["top6"]["tmp_name"][$key];//抓取檔案
        $top6_size = $_FILES["top6"]["size"][$key];//抓取檔案大小
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

        if(file_exists($top6dir.$top6_name)){//檢查是否有相同檔案

          $topname = basename($top6_name,"$top6_tmps");//去除副檔名,留檔名
          $value = "資料夾裡已有名稱{$topname}的檔案";

          echo "
          <script>
          var value = '$value';
          var basename= '$topbasename';

          alerts(value, basename);
          </script>
          ";

        }else {

          move_uploaded_file($top6_tmp,$top6dir.$top6_name);//把檔案移到指定dir

          foreach ($rows as $keys => $value) {
            // echo "keys:".$keys;
            $topid[$keys] = $value[0];//取id
            $toptimes[$keys] = $value[3];//取時間
          }
          $rowsc = count($rows);//計算總共有幾筆資料
          //時間比對
          if (isset($_SESSION["topnum"]) && isset($_SESSION["topnums"])) {

            $topnum = $_SESSION["topnum"];
            $topnums = $_SESSION["topnums"];

            if ($topnum > ($rowsc-1)) {

              $_SESSION["topnum"] = 0;
              $topnum = $_SESSION["topnum"];

            }

            if ($topnums > ($rowsc-1)) {
              $_SESSION["topnums"] = 0;
              $topnums = $_SESSION["topnums"];

            }
            //時間比對
            $toptime = strtotime($toptimes["$topnum"]) < strtotime($toptimes["$topnums"]);
            $toptimess = strtotime($toptimes["$topnum"]) == strtotime($toptimes["$topnums"]);

            if($toptime || $toptimess){

              $topup = topup($top6_name, $top6dir, $date, $topid["$topnum"]);//更新檔名
              $db->query($topup);//執行更新指令

            }else {

              $topup = topup($top6_name, $top6dir, $date, $topid["$topnums"]);//更新檔名
              $db->query($topup);//執行更新指令

            }
            $_SESSION["topnum"]++;
            $_SESSION["topnums"]++;

          }//if(session["topnum"])
        }//else
      }//if($top6_error)
    }//foreach
  }//FILE["top6"]





  // echo "See=".$_SESSION["topnums"]."<br>";
  // echo "SESSION=".$_SESSION["topnum"]."<br>";

$topse = $db->query(topse());//查詢top資料表

$row = $topse->fetchAll();
  foreach ($row as $key => $value) {

    $picName = $value[1];
    $picDir = $value[2];
    if (!empty($picName) && !empty($picDir)) {
			$display = $picDir.$picName;
		}else {
			$display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
		}

    echo "
    <li>
      <a href='$display' title='$picName' data-rel='colorbox'>
        <img width='150' height='150' alt='150x150' src='$display'/>
        <div class='text'>
          <div class='inner'>$picName</div>
        </div>
      </a>

      <div class='tools tools-top'>
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

    foreach ($rows as $key => $value) { //取得資料庫
      echo $key.$value[3]."<br>";//顯示id && 時間
    }

    if(isset($_POST["clear"])){
      $clear = $_POST["clear"];
      for ($i=0; $i < 6; $i++) {
        $clear = $db->query("UPDATE top SET
                          name = ' ',
                          datetime = ' '
                        WHERE
                          '".$i."'
                        ");
      }

      $_SESSION["topnum"] = 0;
      $_SESSION["topnums"] = 1;

    }
$db = null;
?>
