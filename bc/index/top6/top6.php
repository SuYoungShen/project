<script type="text/javascript">
  function top6() {
    alert("已有相同檔案");
  }
</script>



<?php

  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

  $top6dir='index/top6/images/';

  // if(isset($_FILES["top6"])){
  //
  //   foreach($_FILES["top6"]["tmp_name"] as $key => $top6tmp_name){//檔案以陣列方式接收
  //
  //     $top6name = $_FILES["top6"]["name"][$key];//抓取檔案名稱
  //     $top6tmp = $_FILES["top6"]["tmp_name"][$key];//抓取檔案
  //
  //     date_default_timezone_set('Asia/Taipei');
  //     $date = date("Y-m-d H:i:s");//時間
  //
  //     if(file_exists($top6dir.$top6name)){//檢查是否有相同檔案
  //
  //       echo "<script>top6();</script>";
  //
  //     }else {
  //
  //       move_uploaded_file($top6tmp,$top6dir.$top6name);//把檔案移到指定dir
  //
  //       $topup = topup($top6name, $top6dir, $date, $key);//更新檔名
  //       $db->query($topup);//執行更新指令
  //
  //     }
  //   }
  // }

//   $toptime = $db->query(topse());
//   $rows = $toptime->fetchAll();
//   // echo count($rows);//計算總共有幾筆資料
//
//   foreach ($rows as $key => $value) {//
//    $topid[$key] = $value[0];//取id
//    $toptimes[$key] = $value[3];//取時間
//
//   }
// $c=1;
//   for ($i=0; $i <count($rows) ; $i++) {
//
//     if(strtotime($toptimes["$i"])<strtotime($toptimes["$c"])){
//
//       echo "i".$i."<br>";
//       echo "c".$c."<br>";
//       echo "string<br>";
//     $c++;
//     }
//   }


  // if (isset($_SESSION["topid"])) {
  //
  //    $se = $_SESSION["topid"]++;
  //
  //   if ($se == 6 || $se > 6) {
  //   $se = $_SESSION["topid"] = 0;
  //   }
  // }else {
  //   $_SESSION["topid"]=0;
  //   $se = $_SESSION["topid"];
  // }
  // echo $se;
  // session_unset($_SESSION["id"]);

echo date("Y-m-d H:i:s",strtotime("+10 Second"))."<br>";
$toptime = $db->query(topse());
$rows = $toptime->fetchAll();

  if(isset($_FILES["top6"])){//檢查有沒有檔案

    foreach($_FILES["top6"]["tmp_name"] as $key => $top6tmp_name){//檔案以陣列方式接收
      // echo "key:".$key;
      $top6name = $_FILES["top6"]["name"][$key];//抓取檔案名稱
      $top6tmp = $_FILES["top6"]["tmp_name"][$key];//抓取檔案

      date_default_timezone_set('Asia/Taipei');
      $date = date("Y-m-d H:i:s");//時間

      if(file_exists($top6dir.$top6name)){//檢查是否有相同檔案

        echo "<script>top6();</script>";

      }else {

        move_uploaded_file($top6tmp,$top6dir.$top6name);//把檔案移到指定dir


        // echo count($rows);//計算總共有幾筆資料

        foreach ($rows as $keys => $value) {
          // echo "keys:".$keys;
         $topid[$keys] = $value[0];//取id
         $toptimes[$keys] = $value[3];//取時間

        }
        if (isset($_SESSION["id"]) && isset($_SESSION["idd"])) {

          $se = $_SESSION["id"];
          $see = $_SESSION["idd"];

          if ($se > 4) {

            $_SESSION["id"] = 0;
            $se = $_SESSION["id"];

          }



          if ($see > 5) {
            $_SESSION["idd"] = 0;
            $see = $_SESSION["idd"];

          }



          if($toptimes["$se"] < $toptimes["$see"]){
            echo "string";
            $topup = topup($top6name, $top6dir, $date, $topid["$se"]);//更新檔名
            $db->query($topup);//執行更新指令
            $_SESSION["id"]++;

          }else {
            echo "$see";
            $topup = topup($top6name, $top6dir, $date, $topid["$see"]);//更新檔名
            $db->query($topup);//執行更新指令
            $_SESSION["idd"]++;

          }


        }



      }
    }
  }


$topse = $db->query(topse());//查詢top資料表

  while ($row = $topse->fetch()) {
    $top6 = $row[1];
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


  echo "See=".$_SESSION["idd"]."<br>";
  echo "SESSION=".$_SESSION["id"]."<br>";

    foreach ($rows as $key => $value) {
      echo $key.$value[3]."<br>";
    }

    if(isset($_POST["clear"])){
      $clear = $_POST["clear"];
      for ($i=0; $i < 6; $i++) {
        $clear = $db->query("UPDATE top SET
                          name = ' '
                        WHERE
                          '".$i."'
                        ");
      }
      $_SESSION["id"]=0;
      $_SESSION["idd"]=1;
    }

?>
