<?php

  $dbname="project";
  include ("bc/mysql/connect.php");
  // include("common.php");
  $viewse = $db->query(ViewSe());//查詢資料表
  $display = $viewse->fetchAll();

  $picDir = "bc/view/view/images/";

  $redirect="view.php";
  $msg = "";


  foreach ($display as $key => $value) {

    $id = $value["id"];
    $vi=$viewpoint[$key]=$value["viewpoint"];
    $pic=$picnames[$key]=$value["picname"];
    // $picpath=$path[$key] = $value["path"];
    $dat=$datetime[$key] = $value["datetime"];
    if (empty($vi)) {
          $vi = "燒等補資料";
        }
    if (!empty($pic)) {
      $displays = $picDir.$pic;
    }else {
      $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";

    }

    echo "
    <li>
      <div class='preview'>

        <img alt=' ' src='$displays'>

        <div class='overlay'>
        </div>
      <div class='links'>
        <a data-toggle='modal' href='#modal-$id'><i class='icon-eye-open'></i></a><a href='#'><i class='icon-heart'></i></a>
      </div>
    </div>

      <div id='modal-$id' class='modal hide fade'>
        <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'><i class='icon-remove'></i></a>
        <div class='modal-body'>
            <img alt=' ' src='$displays'>
            <h5>$vi</h5>
        </div>
      </div>
    </li>
    ";
  }


  if(isset($_POST["clear"])){
    $clear = $_POST["clear"];
    for ($i=0; $i < 9; $i++) {
      $clear = $db->query("UPDATE view SET
                        picname = ' ',
                        path='',
                        datetime = ' '
                      WHERE
                        '".$i."'
                      ");
    }

    $_SESSION["viewnum"] = 0;
    $_SESSION["viewnums"] = 1;

  }

  $db=null;
?>
