<script type="text/javascript" src="../../assets/js/alert.js"></script>
 <?php
  $dbname="project";
  include ("../../mysql/connect.php");
  include ("../common.php");

  $picDir = "view/images/";
  $redirect="../../view.php";
  $msg = "";
  $required = isset($_POST["placeName"]) &&
              !empty($_POST["placeName"]) &&
              isset($_POST["viewpoint"]) &&
              !empty($_POST["viewpoint"]);//必填

  if ($required) {

    $placeName = $_POST["placeName"];//地區名
    $viewpoint = $_POST["viewpoint"];//景點名
    $attractions = $_POST["attractions"];//景點介紹
    $arrival = $_POST["arrival"];//如何到達

    if (isset($_FILES["picName"])) {

      foreach($_FILES["picName"]["tmp_name"] as $key => $pic_tmp_name){//檔案以陣列方式接收
        // echo "key:".$key;
        $pic_error = $_FILES["picName"]["error"][$key];//取得錯誤值

        if ($pic_error == 4 ) {//判斷是否有錯誤

          message("不小心按到送出了齁",$redirect);

        }else if($pic_error == 0){

          $pic_name = $_FILES["picName"]["name"][$key];//抓取檔案名稱
          $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//  抓取檔案
          $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
          $pic_tmps = strrchr($pic_name,".");//取得檔案的副檔名

          $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
                          , '.bmp', '.gif');//設定副檔名

          if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名

            $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
            message($pictmp,$redirect);

            break;

          }else if($pic_size > 2097152){//檢查檔案大小

            $picsize = $pic_name."檔案已超過2MB";
            echo "
            <script>
            var value = '$picsize';
            var basename= '$redirect';
            alerts(value, basename);
            </script>";
            break;
          }

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          if(file_exists($picDir.$pic_name)){//檢查是否有相同檔案

            $picname = basename($pic_name,"$pic_tmps");//去除副檔名,留檔名
            echo "
            <script>
            var value = '資料夾裡已有名稱'+'$picname'+'的檔案';
            var basename= '$redirect';

            alerts(value, basename);
            </script>
            ";

          }else {

            move_uploaded_file($pic_tmp,$picDir.$pic_name);//把檔案移到指定dir
            $true = $db->query(PlaceUp(
                                        $placeName,
                                        $viewpoint,
                                        $attractions,
                                        $arrival,
                                        $pic_name,
                                        $picDir,
                                        $datetime
                                      ));
            if ($true) {
              message("成功",$redirect);

            }else {
              message("失敗",$redirect);
            }

          }//else
        }//if($pic_error)
      }//foreach
    }


  }else {
    echo "失敗";
  }

  // }
  $db=null;

 ?>
