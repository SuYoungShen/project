<?php
include ("mysql/connect.php");//連接資料庫
include ("common.php");//常用語法

$carousel='about/carousel/images/';


if (isset($_FILES["carousel"])) {
  echo "
  <script>
    alert('s');
  </script>
  ";
  // foreach($_FILES["carousel"]["tmp_name"] as $key => $carousel_tmp_name){//檔案以陣列方式接收
  //
  //   $carousel_error = $_FILES["carousel"]["error"][$key];//取得錯誤值
  //   echo $carousel_error;
  //   if ($carousel_error == 4 ) {//判斷是否有錯誤
  //
  //     echo "
  //     <script>
  //     var value = '不小心按到送出了齁~~~';
  //     var basename= '$topbasename';
  //     alerts(value, basename);
  //     </script>";
  //
  //   }
  // }//foreach
}//FILE["carousel"]





// echo "See=".$_SESSION["topnums"]."<br>";
// echo "SESSION=".$_SESSION["topnum"]."<br>";
//
// $topse = $db->query(topse());//查詢top資料表
//
// $row = $topse->fetchAll();
// foreach ($row as $key => $value) {
//   $top6 = $value[1];
//   echo "
//   <li>
//     <a href='index/top6/images/$top6' title='$top6' data-rel='colorbox'>
//       <img width='150' height='150' alt='150x150' src='index/top6/images/$top6'/>
//       <div class='text'>
//         <div class='inner'>$top6</div>
//       </div>
//     </a>
//
//     <div class='tools tools-top'>
//       <a href='#'>
//         <i class='ace-icon fa fa-pencil'></i>
//       </a>
//
//       <a href='#'>
//         <i class='ace-icon fa fa-times red'></i>
//       </a>
//     </div>
//   </li>
//   ";
// }

 ?>


<li>
  <a href="assets/images/gallery/image-1.jpg" title="景點名" data-rel="colorbox">
    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
    <div class="text">
      <div class="inner">景點名</div>
    </div>
  </a>

  <div class="tools tools-top">
    <a href="#">
      <i class="ace-icon fa fa-link"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-paperclip"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-pencil"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-times red"></i>
    </a>
  </div>
</li>

<li>
  <a href="assets/images/gallery/image-2.jpg" title="景點名" data-rel="colorbox">
    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
    <div class="text">
      <div class="inner">景點名</div>
    </div>
    <div class="tools tools-top">
    <a href="#">
      <i class="ace-icon fa fa-link"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-paperclip"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-pencil"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-times red"></i>
    </a>
  </div>
  </a>
</li>

<li>
  <a href="assets/images/gallery/image-3.jpg" title="景點名" data-rel="colorbox">
    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-3.jpg" />
    <div class="text">
      <div class="inner">景點名</div>
    </div>
  </a>

  <div class="tools tools-top">
    <a href="#">
      <i class="ace-icon fa fa-link"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-paperclip"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-pencil"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-times red"></i>
    </a>
  </div>
</li>

<li>
  <a href="assets/images/gallery/image-4.jpg" title="景點名" data-rel="colorbox">
    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-4.jpg" />
    <div class="text">
      <div class="inner">景點名</div>
    </div>
  </a>

  <div class="tools tools-top">
    <a href="#">
      <i class="ace-icon fa fa-link"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-paperclip"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-pencil"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-times red"></i>
    </a>
  </div>
</li>

<li>
  <a href="assets/images/gallery/image-5.jpg" title="景點名" data-rel="colorbox">
    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-5.jpg" />
    <div class="text">
      <div class="inner">景點名</div>
    </div>
  </a>

  <div class="tools tools-top">
    <a href="#">
      <i class="ace-icon fa fa-link"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-paperclip"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-pencil"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-times red"></i>
    </a>
  </div>
</li>

<li>
  <a href="assets/images/gallery/image-6.jpg" title="景點名" data-rel="colorbox">
    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-6.jpg" />
    <div class="text">
      <div class="inner">景點名</div>
    </div>
  </a>

  <div class="tools tools-top">
    <a href="#">
      <i class="ace-icon fa fa-link"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-paperclip"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-pencil"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-times red"></i>
    </a>
  </div>
</li>
