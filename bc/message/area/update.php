<script type="text/javascript" src="../../assets/js/alert.js"></script>
<?php
  $dbname="project";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $BackWeb="../../area-forum.php";//回到哪個頁面

  $true = isset($_POST["posted"]) &&
          !empty($_POST["message"]) &&
          isset($_POST["reply"]);

  if ($true) {

    $posted = $_POST["posted"];//發表人
    $message = $_POST["message"];//訊息
    $reply = $_POST["reply"];//回覆訊息

    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetime = date("Y-m-d H:i:s");//時間

     $trues = $db->query(AreaUp($posted, $message, $reply, $datetime));

    if ($trues) {
      message("回覆成功",$BackWeb);
    }else {
      message("回覆失敗",$BackWeb);
    }
  }


  $db=null;
 ?>
