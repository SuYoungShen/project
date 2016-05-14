<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>討論區</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/sl-slide.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <!-- Le fav and touch icons -->
  <?php
    include("ico.php");
   ?>
</head>

<body>

  <!--Header-->
  <?php
    include("header.php");
   ?>
 <!-- /header -->

  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>討論區</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li>
              <a href="index.html">首頁</a>
              <span class="divider">/</span>
            </li>

            <li class="active">討論區</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->

  <!-- Career -->
  <section id="career" class="container">
    <div class="span11">
      <ul class="gallery col-4">
        <!--Item 1-->
        <li>
          <div class="preview">
            <a data-toggle="modal" href="#modal-1">發表主題</a>
          </div>

          <div id="modal-1" class="modal hide fade">
            <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true">
              <i class="icon-remove"></i>
            </a>
            <div class="box">
              <form name="comment-form" id="comment-form" action="" method="post">
                <input type="text" placeholder="主題">
                <input type="text" placeholder="發表人(抓取登入者姓名)">
                <input type="text" placeholder="email">
                <input type="file" accept="image/*" >
                <textarea placeholder="你想介紹哪裡?" rows="10"></textarea>
                <input type="submit" value="送出" class="btn btn-large btn-primary" />
              </form>
            </div>
          </div>
        </li>
      </div>

    <br/>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr align="center">
          <th width="30%" >主題</th>
          <th>回覆</th>
          <th>發表人</th>
          <th>觀看</th>
          <th>最新回應</th>
        </tr>
      </thead>

      <tbody  align="center">
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>

      </tbody>
    </table>
    <p>&nbsp;</p>

</section>
<!-- /Career -->

 <!-- pagination -->
 <div class="pagination pagination-centered ">
   <ul class="pagination-lg">
     <li><a href="#"><i class="icon-angle-left"></i></a></li>
     <li><a href="#">1</a></li>
     <li><a href="#">2</a></li>
     <li><a href="#">3</a></li>
     <li><a href="#">4</a></li>
     <li><a href="#">5</a></li>
     <li><a href="#"><i class="icon-angle-right"></i></a></li>
   </ul>
 </div>

<!--Footer-->
<?php
  include("footer.php");
 ?>
<!--/Footer-->
<!--  Login form -->
<?php
  include("login-form.php");
 ?>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
