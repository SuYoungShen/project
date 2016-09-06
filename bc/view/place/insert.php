 <?php
  $dbname="view";
  include ("../../mysql/connect.php");
  // header('Location: ../../view.php');//轉址

  include ("../common.php");
  // $placeSe = $db->query(PlaceSe());//查詢資料表
  // $display = $placeSe->fetchAll();

  $picDir = "../images/";
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
    $true = $db->query(test($placeName,$viewpoint,$attractions,$arrival));

    if ($true) {
      echo "view.php";

  }else {
    echo "2";
  }



  }
  // if (isset($_FILES)) {
  //
  //   foreach ($_FILES["picName"]["tmp_name"] as $key => $value) {
  //     $name = $_FILES["picName"]["name"][$key];
  //
  //
  //   }
  //
  // }
  $db=null;

 ?>
