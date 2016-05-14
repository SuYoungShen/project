<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>高雄 景點</title>
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
      include'ico.php';
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
         <h1>高雄 景點</h1>
       </div>
       <div class="span6">
         <ul class="breadcrumb pull-right">
           <li><a href="index.html">首頁</a>
             <span class="divider">/</span>
           </li>
           <li class="active">景點</li>
         </ul>
       </div>
     </div>
   </div>
 </section>
    <!-- / .title -->
    <div class="container">
      <div class="center">
        <h3>高雄地區</h3>
        <!--<p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>-->
      </div>

      <div class="gap"></div>

      <table class="table table-striped table-bordered table-hover">
        <tr>
          <td>
            <a  href="#" >
              高雄地區名
            </a>
          </td>
        </tr>
      </table>
    </div>
<hr>

<!--熱門排行-->
<section id="portfolio">
 <div class="container">

    <div class="gap"></div>
    <ul class="gallery col-4">

      <?php
        for ($i=1; $i <= 9; $i++) {
          echo "
          <li>
            <div class='preview'>
              <img alt=' ' src='images/portfolio/thumb/300x180.jpg'>
              <div class='overlay'>
              </div>
              <div class='links'>
                <a data-toggle='modal' href='#modal-$i'><i class='icon-eye-open'></i></a><a href='#'><i class='icon-heart'></i></a>
              </div>
            </div>
            <div class='desc'>
              <h5>景點名</h5>
            </div>
            <div id='modal-$i' class='modal hide fade'>
              <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'><i class='icon-remove'></i></a>
              <div class='modal-body'>
                <img src='images/portfolio/full/500x300.jpg' alt=' '>
              </div>
            </div>
          </li>";
        }
       ?>
      </ul>
    </div>

</section>
<!--熱門排行-->

<section id="clients" class="main">
  <div class="container">
    <div class="row-fluid">
      <div class="center">
        <h3>TOP6</h3>
      </div>
      <?php
      include("marquee.php");
      ?>
    </div>
  </div>
</section>

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
