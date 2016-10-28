<?php

  $dbname="project";
  include ("mysql/connect.php");

  $viewse = $db->query(ViewSe());//查詢資料表
  $display = $viewse->fetchAll();

  $picDir = "view/view/images/";
  $Basename="view.php";
  $deletePage = "view/view/delete.php";

  $msg = "";
//
//   if (!isset($_SESSION["viewnum"]) && !isset($_SESSION["viewnums"])) {
//     $_SESSION["viewnum"] = 0;
//     $_SESSION["viewnums"] = 1;
//   }
//
//   if (isset($_POST["insert"])) {
//
//     if (isset($_FILES["picName"])) {
//
//       foreach ($_FILES["picName"]["tmp_name"] as $key => $value) {
//
//         $pic_error = $_FILES["picName"]["error"][$key];//取得錯誤值
//
//         if ($pic_error==4) {
//
//           message("不小心按到送出齁",$Basename);
//
//         }else if($pic_error == 0){
//
//           $pic_name = $_FILES["picName"]["name"][$key];//抓取檔案名稱
//           $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//  抓取檔案
//           $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
//           $pic_tmps = strrchr($pic_name,".");//取得檔案的副檔名
//
//           $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
//           , '.bmp', '.gif');//設定副檔名
//
//           if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名
//
//             $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
//             message($pictmp,$Basename);
//
//             break;
//
//           }else if($pic_size > 2097152){//檢查檔案大小
//
//             $picsize = $pic_name."檔案已超過2MB";
//
//             message($picsize,$Basename);
//
//             break;
//           }
//
//           date_default_timezone_set('Asia/Taipei');//設定時間為台北
//           $datetime = date("Y-m-d H:i:s");//時間
//
//           if(file_exists($picDir.$pic_name)){//檢查是否有相同檔案
//
//             $picname = basename($pic_name,"$pic_tmps");//去除副檔名,留檔名
//             $How = $db->query(ViewUp(
//                                       $viewpoint,
//                                       $picname,
//                                       $picPath,
//                                       $datetime,
//                                       $key
//                                     ));
//           if ($How) {
//
//             message("新增成功,資料夾裡已有名稱'+'$picname'+'的檔案",$Basename);
//
//           }else{
//             message("新增失敗",$Basename);
//           }
//
//         }else{
//
//           move_uploaded_file($pic_tmp,$picDir.$pic_name);//把檔案移到指定dir
//
//           foreach ($display as $key => $value) {
//             $view_id[$key] = $value["id"];
//             $time[$key] = $value["datetime"];
//           }
//
//           $sum = count($display);//計算總共有幾筆資料
//           //時間比對
//           if (isset($_SESSION["viewnum"]) && isset($_SESSION["viewnums"])) {
//
//             $viewnum = $_SESSION["viewnum"];
//             $viewnums = $_SESSION["viewnums"];
//
//             if ($viewnum > ($sum-1)) {
//
//               $_SESSION["viewnum"] = 0;
//               $viewnum = $_SESSION["viewnum"];
//
//             }
//
//             if ($viewnums > ($sum-1)) {
//               $_SESSION["viewnums"] = 0;
//               $viewnums = $_SESSION["viewnums"];
//             }
//             //時間比對
//             $times = strtotime($time["$viewnum"]) < strtotime($time["$viewnums"]);
//             $timess = strtotime($time["$viewnum"]) == strtotime($time["$viewnums"]);
//
//             if($times || $timess){
//               $How = $db->query(
//                                 ViewUp(
//                                         "",
//                                         $pic_name,
//                                         $picDir,
//                                         $datetime,
//                                         $view_id["$viewnum"])
//                                       );//執行更新指令
//
//               message("新增成功",$Basename);
//
//             }else {
//               $How = $db->query(
//                                 ViewUp(
//                                         "",
//                                         $pic_name,
//                                         $picDir,
//                                         $datetime,
//                                         $view_id["$viewnums"])
//                                       );//執行更新指令
//
//               message("新增成功",$Basename);
//
//             }
//
//             $_SESSION["viewnum"]++;
//             $_SESSION["viewnums"]++;
//
//           }//else
//         }//if($pic_error)
//       }//foreach
//     }
//   }
// }

  foreach ($display as $key => $value) {
    $id = $value["id"];
    $vi=$viewpoint[$key]=$value["viewpoint"];
    $picpath=$path[$key] = $value["path"];
    $pic=$picnames[$key]=$value["picname"];
    $dat=$datetime[$key] = $value["datetime"];

    if (!empty($pic) && !empty($picpath)) {
      $displays = $picpath.$pic;
    }else {
      $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
    }

    echo "
    <li>
      <a href='$displays' title='$vi' data-rel='colorbox'>
        <img width='150' height='150' alt='150x150' src='$displays' />
        <div class='text'>
          <div class='inner'>$vi</div>
        </div>
      </a>

      <div class='tools tools-top'>
      <!--
        <a href='#'>
          <i class='ace-icon fa fa-link'></i>
        </a>

        <a href='#'>
          <i class='ace-icon fa fa-paperclip'></i>
        </a>
        -->
        <a href='#edits' data-toggle='modal' onclick='Edits(\"$id\",\"$vi\",\"$picpath\",\"$pic\")'>
          <i class='ace-icon fa fa-pencil'></i>
        </a>

        <a href='#'  onclick='bootboxs(\"$id\",\"$deletePage\")'>
          <i class='ace-icon fa fa-times red'></i>
        </a>
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
    message("",$Basename);
  }

  $db=null;
?>
