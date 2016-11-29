<?php

  $dbname="project";
  include ("bc/mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法
  $picDir = "bc/index/top6/images/";
  $WebSite = $_SERVER["PHP_SELF"];
  $topse = $db->query(topse());//查詢top資料表
  $row = $topse->fetchAll();


  foreach ($row as $key => $value) {

    $placeName = $value['place'];
    $picName = $value['name'];

    if (empty($placeName)) {
        $placeName = "燒等補資料";
    }
    if (!empty($picName)) {
			$display = $picDir.$picName;
		}else {
			$display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
		}

    echo "

      <div class='preview'>
        <img src='$display' class='img-responsive' style='max-height:243px'>
        <div class='overlay'>
        </div>
        <div class='links'>
            <a data-toggle='modal' href='#modal-$key' >
              <i class='icon-eye-open'></i></a><a href=''><i class='icon-heart' onclick='Insert(
                                                                                                  \"$accounts\",
                                                                                                  \"$placeName\",
                                                                                                  \"$picName\",
                                                                                                  \"$picDir\",
                                                                                                  \"$WebSite\"
                                                                                                  )'></i>
            </a>
        </div>
      </div>
      <div class='desc'>
        <h5>$placeName</h5>
      </div>
      <div id='modal-$key' class='modal hide fade'>
        <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'></a>
        <div class='modal-body'>
          <img src='$display' width='100%' style='max-height:400px' alt=' '>
        </div>
      </div>

    ";
  }


$db = null;
?>
