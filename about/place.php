<?php
  $dbname="project";
  include ("bc/mysql/connect.php");

  $placeSe = $db->query(PlaceSe());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/about/place/images/";

  foreach ($display as $key => $value) {

    $place_Name=$value[0];//地區名
    $Introduction=$value[1];//地區介紹
    $pic_name=$value[2];//照片名
    $datetime=$value[4];//時間

    echo "
     <tr>
      <td>
        <a data-toggle='modal' href='#modal-$key' >
          $place_Name
        </a>
      </td>

      <div id='modal-$key' class='modal hide fade'>
        <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
          <i class='icon-remove'></i>
        </a>
        <div class='box'>
          <img src='$picDir$pic_name'>
          <h5>$place_Name</h5>
          <p>$Introduction</p>
        </div>
      </div>
    </tr>
    ";

  }


  $db=null;

 ?>
