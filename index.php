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

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- bootstrap & fontawesome -->
    <!-- <link rel="stylesheet" href="bc/assets/css/bootstrap.min.css" /> -->
    <script type="text/javascript" src="js/alert.js"></script>
    <script type="text/javascript" src="favorite/js/insert.js"></script>

    <!-- ace styles -->

    <!-- 自行填入 -->

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="login/js/registered.js"></script>

    <!-- 自行填入 -->

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
    <![endif]-->
    <!-- Le fav and touch icons -->
    <?php
      session_start();
      include("bc/mysql/connect.php");
      include("login/check_login.php");
      $Back = "index.php";
      Login($db,$Back);
      Login_Out($Back);

      if (isset($_SESSION["login_account"]) && !empty($_SESSION["login_account"])) {
         $accounts = $_SESSION["login_account"];
      }else {
        $accounts = "";
      }//加入我的最愛使用

      include("ico.php");
     ?>

</head>

<body  style="background-color:#DDDDDD">
  <!--Header-->
  <header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <a class="pull-left " href="index.php"><img src='images/logo.png' width="100%" alt='' /></a>

        <div class="nav-collapse collapse pull-right">

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
                    <?php
                    include ("area/place.php");
                    function Placess(){
                      $place = "SELECT * From `places`";
                      return $place;
                    }
                    ?>
                  </tr>
                </table>
              </div>
            </li>

            <li><a href="forum.php">討論區</a></li>

            <?php
            Member_Information();
            ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </header>
  <!-- /header -->

<div class="container">
  <div class="row">
    <div class="span12">
      <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" align='center'>
          <div class="active item"><img src="bc\index\slider\images\1.jpg" width="60%"  class='img-responsive' alt=""></div>
          <div class="item"><img src="bc\index\slider\images\2.jpg" width="60%"  class='img-responsive' alt=""></div>
          <div class="item"><img src="bc\index\slider\images\3.jpg" width="60%"  class='img-responsive' alt=""></div>
        </div>

        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>

  </div>
</div>

</div>


      <!--Slider輪播-->
      <!-- <section id="slide-show" >
        <div id="slider" class="sl-slider-wrapper">

          <div class="sl-slider">
            <?php
              // include("index/slider/slider.php");
            ?>

          </div>

          <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
            <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
          </nav>

        </div>

      </section> -->
      <!--Slider輪播-->

  <!--熱門排行-->
  <!-- <div class="container" > -->
    <section id="recent-works">
      <div class="container">
        <div class="center">
          <h3>TOP6</h3>
          <!--<p class="lead">高雄熱門景點</p>-->
        </div>
        <div class="gap"></div>
        <div class="gallery col-4">
        <?php
          include 'index/top6/top6.php';
         ?>
       </div>
        <!-- <div class="gallery col-4">
          <div class='preview'>
            <div class="row-fluid">
              <div class="span4">
                <img src='bc\index\top6\images\1.jpg' class='img-responsive' style="max-height:243px">
                <div class='overlay'>
                </div>

                <div class='desc'>
                  <h5>$placeName</h5>
                </div>
              </div>
              <div class="span4">
                <img src='bc\index\top6\images\2.jpg' class='img-responsive' style="max-height:243px">
                <div class='overlay'>
                </div>

                <div class='desc'>
                  <h5>$placeName</h5>
                </div>
              </div>
              <div class="span4">
                <img src='bc\index\top6\images\3.jpg' class='img-responsive' style="max-height:243px">
                <div class='overlay'>
                </div>

                <div class='desc'>
                  <h5>$placeName</h5>
                </div>
              </div>
            </div>

            <div class="row-fluid">
              <div class="span4">
                <img src='bc\index\top6\images\4.jpg' class='img-responsive' style="max-height:243px">
                <div class='overlay'>
                </div>

                <div class='desc'>
                  <h5>$placeName</h5>
                </div>
              </div>
              <div class="span4">
                <img src='bc\index\top6\images\5.jpg' class='img-responsive' style="max-height:243px">
                <div class='overlay'>
                </div>

                <div class='desc'>
                  <h5>$placeName</h5>
                </div>
              </div>
              <div class="span4">
                <img src='bc\index\top6\images\6.jpg' class='img-responsive' style="max-height:243px">
                <div class='overlay'>
                </div>

                <div class='desc'>
                  <h5>$placeName</h5>
                </div>
              </div>
            </div>
          </div>

          <div id='modal-$key' class='modal hide fade'>
            <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'></a>
            <div class='modal-body'>
              <img src='bc\index\top6\images\1.jpg' width='100%' style='max-height:400px' alt=' '>
            </div>
          </div>


            <?php
              // include("index/top6/top6.php");

            ?>
        </div> -->


    </section>
  <!-- </div> -->
  <!--熱門排行-->

  <!--Footer-->
  <?php
    include("footer.php");
   ?>
  <!--/Footer-->



  <!-- Button to trigger modal -->
  <a href="#myModal" role="button" class="btn" data-toggle="modal">執行範例對話視窗</a>

  <!-- Modal -->
  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">登入</h3>
    </div>
    <div class="modal-body">


      <form method="post" >
        <span >
          <input type="text" name="login_account" class="form-control" placeholder="帳號" />

        </span>
        <br>
        <span>
          <input type="password" name="login_password" class="form-control" placeholder="密碼" />

        </span>

        <div class="space"></div>

        <div class="clearfix">
          <button type="submit" name="login" class="width-30  btn btn-sm btn-primary">
            <i class="ace-icon fa fa-key"></i>
            <span class="bigger-110">登入</span>
          </button>
        </div>

        <div class="space-4"></div>
      </form>



    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
      <button class="btn btn-primary">儲存變更</button>
    </div>

  </div>
  <!--  Login form -->
  <?php
    // include("login-form.php");
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
