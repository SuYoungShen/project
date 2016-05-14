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

    <!--<link rel="stylesheet" href="1.css" type="text/css" charset="utf-8">-->


    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

     <!--Header-->
     <?php
       require("header.php");
      ?>
    <!-- /header -->

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>高雄</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">首頁</a> <span class="divider">/</span></li>
                        <li class="active">認識高雄</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span6">
                <h2>高雄</h2>
                <p>高雄地區介紹</p>
            </div>

          <div class="span6">
            <div class="slider_container">
      				<div>
      					<img src="images/picloop/400x280.jpg" alt="pure css3 slider" />
      					<span class="info">景點名</span>
      				</div>

      				<div>
      					<img src="images/picloop/400x280-1.jpg" alt="pure css3 slider" />
      					<span class="info">景點名</span>
      				</div>
              <div>
                <img src="images/picloop/400x280-2.jpg" alt="pure css3 slider" />
                <span class="info">景點名</span>
              </div>
              <div>
      					<img src="images/picloop/400x280.jpg" alt="pure css3 slider" />
      					<span class="info">景點名</span>
              </div>

      				<div>
      					<img src="images/picloop/400x280-1.jpg" alt="pure css3 slider" />
      					<span class="info">景點名</span>
      				</div>
          </div>
        </div>
      </div>


        <hr>
		<div class="container">
        <div class="center">
            <h3>高雄地區</h3>
            <!--<p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>-->
        </div>
        <div class="gap"></div>


        <ul class="gallery col-4">

          <table class="table table-striped table-bordered table-hover">
            <tr>
              <li>

                <td>
                  <a data-toggle="modal" href="#modal-1" >
                    高雄地區名
                  </a>
                </td>

                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="box">
                        <p><img src="images/portfolio/full/500x300.jpg"  width="100%" style="max-height:400px" ></p>
                    <h5>地區名</h5>
                    <p>地區介紹</p>

                    </div>
                </div>
            </li>

            </tr>
        </table>
        </ul>
    </div>
        <hr>
		    <div class="center">
            <h3>TOP6</h3>
        </div>
        <!--跑馬燈-->

        <?php
        include("marquee.php");
        ?>

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
<!--<script type="text/javascript" src="1.js"></script>-->
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>


</body>
</html>
