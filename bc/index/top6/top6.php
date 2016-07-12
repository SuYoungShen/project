<script type="text/javascript">
  function top6(value) {
    alert('資料夾裡已有名稱'+value+'的檔案');
  }
</script>

<?php

  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

  $top6dir='index/top6/images/';

if (!isset($_SESSION["topnum"]) && !isset($_SESSION["topnums"])) {
  $_SESSION["topnum"] = 0;
  $_SESSION["topnums"] = 1;
}

  $toptime = $db->query(topse());
  $rows = $toptime->fetchAll();

  if(isset($_FILES["top6"])){//檢查有沒有檔案

    foreach($_FILES["top6"]["tmp_name"] as $key => $top6_tmp_name){//檔案以陣列方式接收
      // echo "key:".$key;
      $top6_name = $_FILES["top6"]["name"][$key];//抓取檔案名稱
      $top6_tmp = $_FILES["top6"]["tmp_name"][$key];//抓取檔案
      $top6_tmps = strrchr($top6_name,".");//取得檔案的副檔名

      $toptmp = array('.jpg', '.png', '.bmp', '.gif', '.tif', '.pcx', '.psd');//設定副檔名

      if (!in_array($top6_tmps,$toptmp)) {
        echo "不好意思,只接受".implode($toptmp);
      }

      date_default_timezone_set('Asia/Taipei');
      $date = date("Y-m-d H:i:s");//時間

      if(file_exists($top6dir.$top6_name)){//檢查是否有相同檔案

        $topname = basename($top6_name,"$top6_tmps");//去除副檔名,留檔名
        echo "
        <script>
          var value = '$topname ';
          top6(value);
        </script>
        ";

      }else {

        move_uploaded_file($top6_tmp,$top6dir.$top6_name);//把檔案移到指定dir
        // echo count($rows);//計算總共有幾筆資料
        foreach ($rows as $keys => $value) {
          // echo "keys:".$keys;
          $topid[$keys] = $value[0];//取id
          $toptimes[$keys] = $value[3];//取時間
        }

        //時間比對
        if (isset($_SESSION["topnum"]) && isset($_SESSION["topnums"])) {

          $topnum = $_SESSION["topnum"];
          $topnums = $_SESSION["topnums"];

          if ($topnum > 5) {

            $_SESSION["topnum"] = 0;
            $topnum = $_SESSION["topnum"];

          }

          if ($topnums > 5) {
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
    }//foreach
  }//FILE["top6"]


  // echo "See=".$_SESSION["topnums"]."<br>";
  // echo "SESSION=".$_SESSION["topnum"]."<br>";

$topse = $db->query(topse());//查詢top資料表

$row = $topse->fetchAll();
  foreach ($row as $key => $value) {
    $top6 = $value[1];
    echo "
    <li>
      <a href='index/top6/images/$top6' title='$top6' data-rel='colorbox'>
        <img width='150' height='150' alt='150x150' src='index/top6/images/$top6'/>
        <div class='text'>
          <div class='inner'>$top6</div>
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

?>
