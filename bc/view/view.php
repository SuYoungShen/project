<?php

  $dbname="view";
  include ("mysql/connect.php");

  $viewse = $db->query(ViewSe());//查詢資料表
  $display = $viewse->fetchAll();

  foreach ($display as $key => $value) {

    $vi=$viewpoint[$key]=$value[0];
    $pic=$pic_name[$key]=$value[1];
    $pdir=$picDir[$key] = $value[2];
    $dat=$datetime[$key] = $value[3];
    echo "
    <li>
      <a href='$pdir$pic' title='$vi' data-rel='colorbox'>
        <img width='150' height='150' alt='150x150' src='$pdir$pic' />
        <div class='text'>
          <div class='inner'>$vi</div>
        </div>
      </a>

      <div class='tools tools-top'>
        <a href='#'>
          <i class='ace-icon fa fa-link'></i>
        </a>

        <a href='#'>
          <i class='ace-icon fa fa-paperclip'></i>
        </a>

        <a href='#'>
          <i class='ace-icon fa fa-pencil'></i>
        </a>

        <a href='#'>
          <i class='ace-icon fa fa-times red'></i>
        </a>
      </div>
    </li>
    ";
  }

  $db=null;
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

<!-- <li>
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
</li> -->
