<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>高雄景點</title>
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
    <header class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <a id="logo" class="pull-left" href="index.php"></a>

        <div class="nav-collapse collapse pull-right">
          <form class="navbar-search pull-left" action="" method="">
            <input type="text" class="search-query" placeholder="要去哪ㄜ...?">
          </form>

          <ul class="nav">
            <li class="active">
              <a href="index.php">首頁</a>
            </li>
            <li>
              <a href="about.php">認識高雄</a>
            </li>
            <li class="dropdown">
              <a href="view.php" class="dropdown-toggle" data-toggle="dropdown">景點
                <i class="icon-angle-down"></i>
              </a>
              <div class="dropdown-menu">
                <table class="table table-hover ">
                  <tr >
                    <td><a href="view.php">首頁</a></td>
                    <td><a href="area.php">地區名</a></td>
                  </tr>
                </table>
              </div>
            </li>

            <li><a href="forum.php">討論區</a></li>
            <!--<li><a href="contact-us.html">Contact</a></li>-->
            <li class="login">
              <a data-toggle="modal" href="#loginForm"><i class="icon-user"></i></a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </header>

    <!-- /header -->

    <!--Slider輪播-->
    <section id="slide-show">
      <div id="slider" class="sl-slider-wrapper">
        <!--Slider Items-->
        <div class="sl-slider">
          <!--Slider Item1-->
          <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="container">
                <img class="pull-right" src="images/sample/slider/autox520.jpg" alt="" />
                <h2>高雄85大樓</h2>
                <!-- <h3 class="gap">Tincidunt condimentum eros</h3>
                <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
              </div>
            </div>
          </div>
          <!--/Slider Item1-->

          <!--Slider Item2-->
          <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="container">
                <img class="pull-right" src="images/sample/slider/autox520-1.jpg" alt="" />
                <h2>高雄85大樓</h2>
                <!-- <h3 class="gap">Aenean ultricies mi vitast</h3>
                <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
              </div>
            </div>
          </div>
          <!--Slider Item2-->

          <!--Slider Item3-->
          <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="container">
                <img class="pull-right" src="images/sample/slider/autox520-2.jpg" alt="" />
                <h2>高雄85大樓</h2>
                <!-- <h3 class="gap">Breatures who have been utterly</h3>
                <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
              </div>
            </div>
          </div>
          <!--Slider Item3-->
        </div>
        <!--/Slider Items-->

        <!--Slider Next Prev button-->
        <nav id="nav-arrows" class="nav-arrows">
          <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
          <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
        </nav>
        <!--/Slider Next Prev button-->
      </div>
      <!-- /slider-wrapper -->
    </section>
    <!--/Slider-->

<!--熱門排行-->
<section id="recent-works">
  <div class="container">
    <div class="center">
      <h3>TOP6</h3>
      <!--<p class="lead">高雄熱門景點</p>-->
    </div>
    <div class="gap"></div>
    <ul class="gallery col-4">
      <!--Item 1-->
      <?php
        for ($i=1; $i <= 6 ; $i++) {
          echo "
          <li>
            <div class='preview'>
              <img alt=' ' src='images/portfolio/thumb/300x180.jpg'>
              <div class='overlay'>
              </div>
              <div class='links'>
                <a data-toggle='modal' href='#modal-1'><i class='icon-eye-open'></i></a><a href='#'><i class='icon-heart'></i></a>
              </div>
            </div>
            <div class='desc'>
              <h5>景點名</h5>
            </div>
            <div id='modal-1' class='modal hide fade'>
              <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'><i class='icon-remove'></i></a>
              <div class='modal-body'>
                <img src='images/portfolio/full/500x300.jpg' alt=' '>
              </div>
            </div>
          </li>
          ";
        }

       ?>
      </ul>
    </div>

</section>
<!--熱門排行-->

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
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript" src="js/slider.js"></script>
<!-- /SL Slider -->
</body>

</html>
