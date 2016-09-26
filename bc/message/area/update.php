<script type="text/javascript" src="../../assets/js/alert.js"></script>
<?php
  $dbname="project";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $BackWeb="../../../area.php";//回到哪個頁面

  if (isset($_POST["posted"])) {

    $posted=$_POST["posted"];
    $email=$_POST["email"];
    $site=$_POST["site"];
    $message=$_POST["message"];
    $true=$db->query(test($posted,$email,$site));

    if ($true) {
      message("更新成功",$BackWeb);
    }else {
      message("更新失敗",$BackWeb);
    }

  }


  $db=null;
 ?>
