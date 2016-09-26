<?php
$dbname="about";
include ("bc/mysql/connect.php");//連接資料庫
// include ("common.php");//常用語法

$picDir='bc/about/carousel/images/';
$carouselSe = $db->query(CarouselSe());//查詢top資料表
$display = $carouselSe->fetchAll();//顯示


foreach ($display as $key => $value) {

  $picName = $value[1];
  // var_dump($picName);
  // if (empty($picName)) {
  //
  //      $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  //   //    $displays = $picDir.$picName;
  //   //    $displays =  "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  //
  // }else {
  //   $displays = $picDir.$picName;
  // }
    $displays = $picDir.$picName;

  echo "
     <div>
       <img src='$displays'/>
       <span class='info'>景點名</span>
     </div>
   ";
  // echo "
  // <li>
  //   <a href='about/carousel/images/$displays' title='景點名' data-rel='colorbox'>
  //     <img width='150' height='150' alt='150x150' src='about/carousel/images/$displays' />
  //     <div class='text'>
  //       <div class='inner'>景點名</div>
  //     </div>
  //   </a>
  //
  //   <div class='tools tools-top'>
  //     <a href='#'>
  //       <i class='ace-icon fa fa-link'></i>
  //     </a>
  //
  //     <a href='#'>
  //       <i class='ace-icon fa fa-paperclip'></i>
  //     </a>
  //
  //     <a href='#'>
  //       <i class='ace-icon fa fa-pencil'></i>
  //     </a>
  //
  //     <a href='#'>
  //       <i class='ace-icon fa fa-times red'></i>
  //     </a>
  //   </div>
  // </li>
  // ";
}


$db = null;
 ?>
