<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>地區名</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script type="text/javascript" src='NowTime.js'></script>
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
        <!--
        <a id="logo" class="pull-left" href="index.html"></a>
      -->
      <div class="nav-collapse collapse pull-right">
        <form class="navbar-search pull-left" action="" method="">
          <input type="text" class="search-query" placeholder="要去哪ㄜ...?">
        </form>

        <ul class="nav">
          <li>
            <a href="index.php">首頁</a>
          </li>
          <li>
            <a href="about.php">認識高雄</a>
          </li>
          <li class="dropdown active">
            <a href="view.php" class="dropdown-toggle" data-toggle="dropdown">景點
              <i class="icon-angle-down"></i>
            </a>
            <div class="dropdown-menu">
              <table class="table table-hover ">
                <tr >
                  <td><a href="view.php">首頁</a></td>
                  <td><a href="area.php" >地區名</a></td>
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

 <section class="title">
   <div class="container">
     <div class="row-fluid">
       <div class="span6">
         <h1>地區名</h1>
       </div>
       <div class="span6">
         <ul class="breadcrumb pull-right">
           <li><a href="index.html">首頁</a> <span class="divider">/</span></li>
           <li><a href="portfolio.html">景點首頁</a> <span class="divider">/</span></li>
           <li class="active">地區名</li>
         </ul>
       </div>
     </div>
   </div>
 </section>

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

  <section id="about-us" class="container">
    <div class="row-fluid">
      <div class="span8">
        <div class="blog">
          <div class="blog-item well">
            <a href="#"><h2>景點名</h2></a>

            <p>
              <img src="images/sample/blog1.jpg" width="100%" alt="" />
            </p>
            <p>景點介紹</p>
            <p>如何到達</p>

            <p>&nbsp;</p>

            <div id="comments" class="comments">

              <h4>3 回應</h4>
              <div class="comments-list">

                <div class="user-info media box">
                  <!-- <div class="pull-left">
                    <img class="avatar" src="images/sample/cAvatar1.jpg" alt="" />
                  </div> -->

                  <div class="media-body">
                    <strong>發表人:
                      <a href="#">(會員名)</a>
                    </strong>
                    <br>
                    <small>(發表時間)</small><br>
                    <p>(發表內容)</p>
                  </div>
                </div>

                <div class="comment media">
                  <!-- <div class="pull-left">
                    <img class="avatar" src="images/sample/cAvatar1.jpg" alt="" />
                  </div> -->

                  <div class="media-body">
                    <strong>發表人:<a href="#">(會員名)</a></strong><br>
                    <small>(發表時間)</small><br>
                    <p>(發表內容)</p>
                  </div>
                </div>

                <div class="user-info media box">
                  <!-- <div class="pull-left">
                    <img class="avatar" src="images/sample/cAvatar1.jpg" alt="" />
                  </div> -->

                  <div class="media-body">
                    <strong>發表人:
                      <a href="#">(會員名)</a>
                    </strong>
                    <br>
                    <small>(發表時間)</small><br>
                    <p>(發表內容)</p>
                  </div>
                </div>
              </div>
              <br/>

              <!-- Start Comment Form -->
              <div class="comment-form">
                <h4>請留言</h4>
                <p class="muted">Make sure you enter the (*) required information where indicated. HTML code is not allowed.</p>
                <form name="comment-form" method="post" action="bc/message/area/insert.php">
                  <div class="row-fluid">
                    <div class="span4">
                      <input type="text" name="posted"  required="required" class="input-block-level" placeholder="姓名(抓取會員名)" />
                    </div>
                    <div class="span4">
                      <input type="email" name="email"  required="required" class="input-block-level" placeholder="Email" />
                    </div>
                    <div class="span4">
                      <input type="url" name="site"  required="required" class="input-block-level" placeholder="網址" />
                    </div>
                    <script type="text/javascript">
                      document.cookie="datetime="+getNowTime();
                    </script>
                  </div>
                  <textarea rows="10" name="message" id="message" class="input-block-level" placeholder="有什麼話要說..."></textarea>
                  <input type="submit" value="送出" class="btn btn-large btn-primary" />
                  <input type="reset" value="重置" class="btn btn-large btn-primary" />
                </form>
              </div>
              <!-- End Comment Form -->
            </div>
          </div>
          <!-- End Blog Item -->
        </div>

      </div>
      <div class="span4">
        <div class="center">
          <h3>TOP6</h3>
        </div>

        <?php
        include("marquee-up.php");
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
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
