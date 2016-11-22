<?php
  $dbname="project";
  include ("bc/mysql/connect.php");

  $placeSe = $db->query(Placess());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/about/place/images/";

// echo "<tr>";

  foreach ($display as $key => $value) {
    $id = $value["id"];
    $place_Name = $value["place"];//地區名
    $Introduction = $value["Introduction"];//地區介紹
    // $pic_name=$value["name"];//照片名
    // $datetime=$value["datetime"];//時間

    if (empty($place_Name)) {
      $place_Name="暫無資料";
    }

    if (($key%6) == 0) {

      echo "
      <tr>
        <td>
          <a href='area.php?id=$id&place_name=$place_Name'>$place_Name</a>
        </td>
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
          <a href='area.php?id=$id&place_name=$place_Name'>
            $place_Name
          </a>
        </td>


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
