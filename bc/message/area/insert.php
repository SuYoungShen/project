<script type="text/javascript" src="../../assets/js/alert.js"></script>

<?php
  $dbname = "project";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $id = $_POST["id"];
  $place_name = $_POST["place_name"];
  $viewpoint = $_POST["viewpoint"];
  $BackWeb="../../../area.php?id=$id&place_name=$place_name&viewpoint=$viewpoint";//回到哪個頁面

  if (isset($_POST["message"]) && !empty($_POST["message"])) {


      $posted = trim($_POST["posted"]);//發表人
      $message = trim($_POST["message"]);//留言
      $email = trim($_POST["email"]);//email
      $site = $_POST["site"];//網址
      date_default_timezone_set('Asia/Taipei');//設定時間為台北
      $datetime = date("Y-m-d H:i:s");//時間

      $true=$db->query(
                        AreaIn(
                          $place_name,
                          $viewpoint,
                          $posted,
                          $message,
                          $email,
                          $site,
                          $datetime
                        )
                      );

      if ($true) {
        message("留言成功",$BackWeb);

      }else {
        message("留言失敗",$BackWeb);
      }
  }else {
      message("賣來亂",$BackWeb);
  }


  $db=null;
 ?>
