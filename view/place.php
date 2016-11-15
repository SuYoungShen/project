<?php
  $dbname="project";
  include ("bc/mysql/connect.php");
  include ("common.php");
  $placeSe = $db->query(PlaceSe());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/about/place/images/";

  foreach ($display as $key => $value) {

    $id = $value["id"];
    $place_Name=$value["place"];//地區名
    $viewpoint=$value["viewpoint"];//地區介紹
    $pic_name=$value["name"];//照片名
    $datetime=$value["datetime"];//時間

    if (empty($place_Name)) {
      $place_Name="暫無資料";
    }

    if (($key%6) == 0) {

      echo "
      <tr>
        <td>
          <a data-toggle='modal' href='#modal-$id'>$place_Name</a>
        </td>

        <div id='modal-$id' class='modal hide fade'>
          <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
            <i class='icon-remove'></i>
            </a>
          <div class='box'>
            <img src='$picDir$pic_name'>
            <h5>$id.$place_Name</h5>
            <p>$viewpoint</p>
          </div>
        </div>
      ";
      // echo "
      // <td>
      //   <div class='accordion' id='accordion3'>
      //     <div class='accordion-group'>
      //       <div class='accordion-heading'>
      //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion3' href='#collapseThree'>
      //           景點名
      //         </a>
      //       </div>
      //       <div id='collapseThree' class='accordion-body collapse'>
      //         <div class='accordion-inner'>
      //           <img src='http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png'>
      //           景點介紹
      //         </div>
      //       </div>
      //     </div>
      //     <div class='accordion-group'>
      //       <div class='accordion-heading'>
      //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion3' href='#collapseFour'>
      //           景點名
      //         </a>
      //       </div>
      //       <div id='collapseFour' class='accordion-body collapse'>
      //         <div class='accordion-inner'>
      //           <img src='http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png'>
      //           景點介紹
      //         </div>
      //       </div>
      //     </div>
      //   </div>
      // </td>
      // ";
    }else {

      echo "
        <td>
          <a data-toggle='modal' href='#modal-$id'>
            $place_Name
          </a>
        </td>

        <div id='modal-$id' class='modal hide fade'>
          <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
            <i class='icon-remove'></i>
          </a>
          <div class='box'>
            <img src='$picDir$pic_name'>
            <h5>$id.$place_Name</h5>
            <p>$viewpoint</p>
          </div>
        </div>
      ";
      // echo "
      // <td>
      //   <div class='accordion' id='accordion3'>
      //     <div class='accordion-group'>
      //       <div class='accordion-heading'>
      //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion3' href='#collapseThree'>
      //           景點名
      //         </a>
      //       </div>
      //       <div id='collapseThree' class='accordion-body collapse'>
      //         <div class='accordion-inner'>
      //           <img src='http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png'>
      //           景點介紹
      //         </div>
      //       </div>
      //     </div>
      //     <div class='accordion-group'>
      //       <div class='accordion-heading'>
      //         <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion3' href='#collapseFour'>
      //           景點名
      //         </a>
      //       </div>
      //       <div id='collapseFour' class='accordion-body collapse'>
      //         <div class='accordion-inner'>
      //           <img src='http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png'>
      //           景點介紹
      //         </div>
      //       </div>
      //     </div>
      //   </div>
      // </td>
      // ";
    }
  }

echo "</tr>";

  $db=null;

 ?>
