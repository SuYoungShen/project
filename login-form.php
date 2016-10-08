<!-- bootstrap & fontawesome -->
<!-- <link rel="stylesheet" href="bc/assets/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="bc/assets/font-awesome/4.2.0/css/font-awesome.min.css" />

<!-- text fonts -->
<link rel="stylesheet" href="bc/assets/fonts/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="css/ace.min.css" />

<!--[if lte IE 9]>
  <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
<![endif]-->
<link rel="stylesheet" href="bc/assets/css/ace-rtl.min.css" />
<!--  Login form -->
<!-- <body class="login-layout"> -->
<!-- <div class="login-layout "> -->
  <div class="login-layout modal hide fade in " id="loginForm" aria-hidden="false">
    <!-- <div class="main-container  ">
      <div class="main-content">
        <div class="row"> -->
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <!-- <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i> -->
              <!-- <div class="center modal-header">
                <h1>
                  <i class="ace-icon fa fa-leaf green"></i>
                  <span class="red">Ace</span>
                  <span class="blue" id="id-text2">旅遊網站</span>
                </h1>
                <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
              </div> -->

              <div class="space-6"></div>

              <div class="position-relative modal-body">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-coffee green"></i>
                        登入
                      </h4>

                      <div class="space-6"></div>

                      <form action= method="">
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" class="form-control" name="account" placeholder="帳號" />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" name="passowrd" placeholder="密碼" />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>                             </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="再輸入一次密碼" />
                              <i class="ace-icon fa fa-retweet"></i>
                            </span>
                          </label>

                          <div class="space-24"></div>

                          <div class="clearfix">
                            <button type="reset" class="width-30 pull-left btn btn-sm">
                              <i class="ace-icon fa fa-refresh"></i>
                              <span class="bigger-110">重填</span>
                            </button>

                            <button type="button" class="width-60 pull-right btn btn-sm btn-success">
                              <span class="bigger-110">註冊</span>

                              <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                            </button>
                          </div>
                        </fieldset>
                      </form>
                    </div>

                    <div class="toolbar center">
                      <a href="#" data-target="#login-box" class="back-to-login-link">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        回登入
                      </a>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.signup-box -->
              </div><!-- /.position-relative -->
            </div>
          </div><!-- /.col -->
        <!-- </div><!-- /.row -->
      <!-- </div><!-- /.main-content -->
    <!-- </div><!-- /.main-container -->

  </div>
    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="bc/assets/js/jquery.2.1.1.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
  <script src="assets/js/jquery.1.11.1.min.js"></script>
  <![endif]-->

    <!--[if !IE]> -->
    <script type="text/javascript">
      window.jQuery || document.write("<script src='bc/assets/js/jquery.min.js'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
  <script type="text/javascript">
  window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
  </script>
  <![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='bc/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
      jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
       });
      });



      //you don't need this, just used for changing background
      jQuery(function($) {
       $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
       });
       $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
       });
       $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');

        e.preventDefault();
       });

      });
    </script>
<!-- </div> -->
<!--  Login form -->
<!-- </body> -->
