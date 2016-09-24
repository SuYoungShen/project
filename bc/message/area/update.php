<script type="text/javascript" src="../../assets/js/alert.js"></script>
<?php
  $dbname="message";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $BackWeb="../../area-forum.php";//回到哪個頁面

  if (isset($_POST["placename"])) {

    $placename=$_POST["placename"];
    $true=$db->query(AreaUp($placename));
    if ($true) {
      message("更新成功",$BackWeb);
    }else {
      message("更新失敗",$BackWeb);
    }

  }


  $db=null;
 ?>
