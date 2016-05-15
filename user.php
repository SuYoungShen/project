<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>使用者介面</title>
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


</div>
<!-- /slider-wrapper -->
</section>
<!--/Slider-->

    <section  class="container">
		<form>
			<fieldset>
			<div class="row-fluid">
				<div class="span6">
				<legend>新增景點</legend>

				<table class="table table-bordered" >
					<tr>
						<td>
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      景點名
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <img src="http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png">
                      景點介紹
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      景點名
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <img src="http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png">
                      景點介紹
                    </div>
                  </div>
                </div>
              </div>
            </td>
					</tr>
				</table>

        </div>
				<div class="span6">
				<legend>我的最愛</legend>

				<table class="table table-bordered">
					<tr>
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
                       <img src="http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png">
                       景點介紹
                     </div>
                   </div>
                 </div>
                 <div class="accordion-group">
                   <div class="accordion-heading">
                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFour">
                       景點名
                     </a>
                   </div>
                   <div id="collapseFour" class="accordion-body collapse">
                     <div class="accordion-inner">
                       <img src="http://autismcleveland.net/wp-content/uploads/2015/11/150210073337pm_1012106165.png">
                       景點介紹
                     </div>
                   </div>
                 </div>

						</td>
					</tr>
				</table>

      </div>
    </div>
			</fieldset>
		</form>


    </section>
    <!-- /404 error -->



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
<script src="js/slider.js"></script>
<!-- /SL Slider -->
<!-- 最新編譯和最佳化的 JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
</body>
</html>
