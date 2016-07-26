<script type="text/javascript" src="index/slider/js/alert.js"></script>

<?php

  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

$sliderse = $db->query(sliderse());//查詢slider資料表
$row = $sliderse->fetchAll();
$sliderdir='index/slider/images/';//slider放毒片路徑

echo "
<ol class='carousel-indicators'>
  <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
";
for($i = 1; $i < count($row); $i++)
{
  echo "<li data-target='#myCarousel' data-slide-to='$i'></li>";
}
echo "</ol>";

echo "<div class='carousel-inner'>";


if (!isset($_SESSION["slidernum"]) && !isset($_SESSION["slidernums"])) {
  $_SESSION["slidernum"] = 0;
  $_SESSION["slidernums"] = 1;
}

  $slidertime = $db->query(sliderse());
  $rows = $slidertime->fetchAll();

  if (isset($_FILES["slider"])) {

    foreach($_FILES["slider"]["tmp_name"] as $key => $value){//檔案以陣列方式接收
      // echo "key:".$key;
      $slider6_error = $_FILES["slider"]["error"][$key];//取得錯誤值

      if ($slider6_error == 4 ) {//判斷是否有錯誤

        echo "
        <script>
          var value = '不小心按到送出了齁~~~';
          top6(value);
        </script>";

      }else if($slider6_error == 0){

        $slider6_name = $_FILES["slider"]["name"][$key];//抓取檔案名稱
        $slider6_tmp = $_FILES["slider"]["tmp_name"][$key];//抓取檔案
        $slider6_size = $_FILES["slider"]["size"][$key];//抓取檔案大小
        $slider6_tmps = strrchr($slider6_name,".");//取得檔案的副檔名

        $slidertmp = array('.jpg', '.JPG', '.png', '.PNG'
                        , '.bmp', '.gif');//設定副檔名

        if (!in_array($slider6_tmps,$slidertmp)) {//檢查副檔名

          $slidertmp = "不好意思,只接受".implode(" ",$slidertmp)."的副檔名";
          echo "
          <script>
          var value = '$slidertmp';
          top6(value);
          </script>";
          break;

        }else if($slider6_size > 2097152){//檢查檔案大小

          $slidersize = $slider6_name."檔案已超過2MB";
          echo "
          <script>
            var value = '$slidersize';
            top6(value);
          </script>";
          break;
        }

        date_default_timezone_set('Asia/Taipei');//設定時間為台北
        $date = date("Y-m-d H:i:s");//時間

        if(file_exists($sliderdir.$slider6_name)){//檢查是否有相同檔案

          $slidername = basename($slider6_name,"$slider6_tmps");//去除副檔名,留檔名
          echo "
          <script>
            var value = '資料夾裡已有名稱'+$slidername+'的檔案';
            top6(value);
          </script>
          ";

        }else {

          move_uploaded_file($slider6_tmp,$sliderdir.$slider6_name);//把檔案移到指定dir

          foreach ($rows as $keys => $value) {
            // echo "keys:".$keys;
            $sliderid[$keys] = $value[0];//取id
            $slidertimes[$keys] = $value[3];//取時間
          }
          $rowsc = count($rows);//計算總共有幾筆資料
          //時間比對
          if (isset($_SESSION["slidernum"]) && isset($_SESSION["slidernums"])) {

            $slidernum = $_SESSION["slidernum"];
            $slidernums = $_SESSION["slidernums"];

            if ($slidernum > ($rowsc-1)) {

              $_SESSION["slidernum"] = 0;
              $slidernum = $_SESSION["slidernum"];

            }

            if ($slidernums > ($rowsc-1)) {
              $_SESSION["slidernums"] = 0;
              $slidernums = $_SESSION["slidernums"];

            }
            //時間比對
            $slidertime = strtotime($slidertimes["$slidernum"]) < strtotime($slidertimes["$slidernums"]);
            $slidertimess = strtotime($slidertimes["$slidernum"]) == strtotime($slidertimes["$slidernums"]);

            if($slidertime || $slidertimess){

              $sliderup = sliderup($slider6_name, $sliderdir, $date, $sliderid["$slidernum"]);//更新檔名
              $db->query($sliderup);//執行更新指令

            }else {

              $sliderup = sliderup($slider6_name, $sliderdir, $date, $sliderid["$slidernums"]);//更新檔名
              $db->query($sliderup);//執行更新指令
              
            }
            $_SESSION["slidernum"]++;
            $_SESSION["slidernums"]++;

          }//if(session["topnum"])
        }//else
      }//if($top6_error)
    }//foreach
  }//FILE["top6"]

  // echo "See=".$_SESSION["topnums"]."<br>";
  // echo "SESSION=".$_SESSION["topnum"]."<br>";



// while ($row = $sliderse->fetch()) {
//
//      echo   $row[1]."<br>"; //0資料表欄位
//
// }

foreach ($row as $key => $value) {
  //  echo $key."<br>";
  $test[$key]=$value[1];
  // echo $test;
}
$test0 = $test[0];
echo "
<div class='active item'>
  <img src='index/slider/images/$test0'>
</div>
";
for ($i=1; $i < 6; $i++) {
  $test1 = $test[$i];
  echo "
  <div class='item'>
    <img src='index/slider/images/$test1'>
  </div>
  ";
}

    //
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
