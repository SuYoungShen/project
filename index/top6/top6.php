<?php

  $dbname="top";
  include ("bc/mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法
  $picDir = "bc/index/top6/images/";

$topse = $db->query(topse());//查詢top資料表

$row = $topse->fetchAll();
  foreach ($row as $key => $value) {

    $picName = $value[1];

    if (!empty($picName)) {
			$display = $picDir.$picName;
		}else {
			$display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
		}

    echo "
    <li>
      <div class='preview'>
        <img src='$display'>
        <div class='overlay'>
        </div>
        <div class='links'>
          <a data-toggle='modal' href='#modal-$key'><i class='icon-eye-open'></i></a><a href='#'><i class='icon-heart'></i></a>
        </div>
      </div>
      <div class='desc'>
        <h5>$picName</h5>
      </div>
      <div id='modal-$key' class='modal hide fade'>
        <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'><i class='icon-remove'></i></a>
        <div class='modal-body'>
          <img src='$display' alt=' '>
        </div>
      </div>
    </li>
    ";

  }


$db = null;
?>
