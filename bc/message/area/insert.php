<script type="text/javascript" src="../../assets/js/alert.js"></script>

<?php
  $dbname = "project";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $BackWeb="../../../area.php";//回到哪個頁面

  if (isset($_POST["message"]) && !empty($_POST["message"])) {

      $posted=$_POST["posted"];//發表人
      $message=$_POST["message"];//留言
      $email=$_POST["email"];//email
      $site=$_POST["site"];//網址
      $datetime=$_COOKIE["datetime"];//時間

      $true=$db->query(AreaIn($posted, $message, $email, $site, $datetime));

      if ($true) {
        message("留言成功",$BackWeb);

      }else {
        message("留言失敗",$BackWeb);
      }
  }


  $db=null;
 ?>
