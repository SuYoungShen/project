<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>關於高雄</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
	  <link rel="stylesheet" type="text/css" href="css/picloop.css">
    <!-- Le fav and touch icons -->
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.js"></script>


    <?php
      session_start();
      include("bc/mysql/connect.php");
      include("login/check_login.php");

      Login($db,"about.php");
      Login_Out();
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
             <li>
               <a href="index.php">首頁</a>
             </li>
             <li class="active">
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
             <?php
                Member_Information();
              ?>
           </ul>
         </div><!--/.nav-collapse -->
       </div>
     </div>
     </header>

    <!-- /header -->

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>高雄</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li>
                          <a href="index.php">首頁</a>
                          <span class="divider">/</span>
                        </li>
                        <li class="active">認識高雄</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->

    <section id="about-us" class="container main">
      <div class="container">
        <div class="row-fluid">
          <div class="span6">
            <h2>介紹高雄</h2>
            <p style='font-size:20px'>
              <?php
              include ("about/about.php");
              ?>
            </p>
          </div>
          <!--輪放-->


          <div class="span6">
            <div class="slider_container">
              <?php
              include("about/carousel.php");
              ?>
            </div>
          </div>
          <!--輪放-->

        </div>
      </div>
      <hr>
      <div class="container">
        <div class="center">
          <h3>高雄地區</h3>
          <!--<p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>-->
        </div>
        <div class="gap"></div>

        <table class="table table-striped table-bordered table-hover ">
          <!-- <tr>
            <td>
              <a data-toggle="modal" href="#modal-1" >
                高雄地區名
              </a>
            </td>

            <div id="modal-1" class="modal hide fade">
              <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true">
                <i class="icon-remove"></i>
              </a>
              <div class="box">
                <img src="images/portfolio/full/500x300.jpg">
                <h5>地區名</h5>
                <p>地區介紹</p>
              </div>
            </div>
          </tr> -->

          <?php
            include("about/place.php");
           ?>
           <!-- <tr>
             <td>
           <div class="accordion" id="accordion3">
             <div class="accordion-group">
               <div class="accordion-heading">
                 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
                   景點名
                 </a>
               </div>
               <div id="collapseThree" class="accordion-body collapse">
                 <div class="accordion-inner">

                     <a data-toggle='modal' href='#modal-0'>
                       $place_Name
                     </a>

                   <div id='modal-0' class='modal hide fade'>
                     <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
                       <i class='icon-remove'></i>
                     </a>
                     <div class='box'>
                       <img src='$picDir$pic_name'>
                       <h5>$place_Name</h5>
                       <p>$Introduction</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </td>

          </tr> -->
        </table>
      </div>

      <hr>

      <div class="center">
        <h3>TOP6</h3>
      </div>

      <!--跑馬燈-->
      <?php
      include("marquee.php");
      ?>
      <!--跑馬燈-->

    </section>

<!--Footer-->
  <?php
    require("footer.php");
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
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>

</body>
</html>
