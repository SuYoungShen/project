<?php
  session_start();
  include("../mysql/connect.php");
  include ("common.php");

// if (isset($_GET["value"])) {
//
//   $de = $_GET["value"];
//   $true = $db->query(memberDelete($de));
//
//   if($true == true){
//     // echo "<script>alert('刪除成功');</script>";
//     $_SESSION["de"] = "刪除成功";
//     header("Location:../member.php");
//   }
// }
if (isset($_POST["DeAccounts"])) {

  $de = $_POST["DeAccounts"];
  $true = $db->query(memberDelete($de));

  if ($true == true) {
    echo "刪除成功";
  }else {
    echo "刪除失敗";
  }
}


 ?>
