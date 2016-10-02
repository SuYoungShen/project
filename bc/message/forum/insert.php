<script type="text/javascript" src="../../assets/js/alert.js"></script>

<?php
  $dbname = "project";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $BackWeb="../../../forum.php";//回到哪個頁面

  $true = !empty($_POST["theme"]) &&
          !empty($_POST["posted"]) &&
          !empty($_POST["message"]);

  if ($true) {

    $theme=$_POST["theme"];//網址
    $posted=$_POST["posted"];//發表人
    $email=$_POST["email"];//email
    $message=$_POST["message"];//留言
    $datetime=$_COOKIE["datetime"];//時間

    // $trues=$db->query(ForumIn($theme, $posted, $email));

      $trues=$db->query(ForumIn($theme, $posted, $email, $message, $datetime));

      if ($trues) {
        message("留言成功",$BackWeb);

      }else {
        message("留言失敗",$BackWeb);
      }
  }else {
    message("來亂的???",$BackWeb);
  }


  $db=null;
 ?>
