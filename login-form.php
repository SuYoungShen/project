<!-- Button to trigger modal -->
<!-- <a href="#myModal" role="button" class="btn" data-toggle="modal">執行範例對話視窗</a> -->

<!-- Modal -->
<!--
  <div class="row">
    <div class="span12">

    <div id="loginForm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">會員</h3>
      </div>
      <div class="modal-body">
        <p>登入</p>
      </div>
      <div class="accordion" id="accordion2">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            註冊
          </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse">
          <div class="accordion-inner">
            <form class="" action="index.html" method="post">
              <input type="text" name="name" value="">
            </form>
          </div>
          <div class="modal-footer">

            <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
            <button class="btn btn-primary">儲存變更</button>
          </div>
        </div>

      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            Collapsible Group Item #2
          </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse">
          <div class="accordion-inner">
            Anim pariatur cliche...
          </div>
        </div>
      </div>
    </div>
  </div>



  </div>
</div> -->
<link rel="stylesheet" href="bc/assets/font-awesome/4.2.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="bc/assets/fonts/fonts.googleapis.com.css" />

<link rel="stylesheet" href="css/ace.min.css" />

<link rel="stylesheet" href="bc/assets/css/ace-rtl.min.css" />

  <div class="login-layout modal hide fade in" id="loginForm" aria-hidden="false">
    <!-- <div class="col-xs-6 col-sm-4"> -->
    <!-- <div class="col-sm-10 col-sm-offset-1"> -->
      <div class="login-container">

        <div class="space-6"></div>

        <div class="position-relative">
          <div id="login-box" class="login-box visible widget-box no-border">
            <div class="widget-body">
              <div class="widget-main">
                <h4 class="header blue lighter bigger">
                  <i class="ace-icon fa fa-coffee green"></i>
                  登入
                </h4>

                <div class="space-6"></div>

                <form method="post">
                  <fieldset>
                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="text" name="login_account" class="form-control" placeholder="帳號" />
                        <i class="ace-icon fa fa-user"></i>
                      </span>
                    </label>

                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="password" name="login_password" class="form-control" placeholder="密碼" />
                        <i class="ace-icon fa fa-lock"></i>
                      </span>
                    </label>

                    <div class="space"></div>
                    
                    <div class="clearfix">
                      <label class="inline">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"> 記住我</span>
                      </label>

                      <button type="submit" name="login" class="width-30 pull-right btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-key"></i>
                        <span class="bigger-110">登入</span>
                      </button>
                    </div>

                    <div class="space-4"></div>
                  </fieldset>
                </form>
              </div>

              <div class="toolbar clearfix">
                <div>
                  <a href="#" data-target="#forgot-box" class="forgot-password-link">
                    <i class="ace-icon fa fa-arrow-left"></i>
                    忘記密碼
                  </a>
                </div>

                <div>
                  <a href="#" data-target="#signup-box" class="user-signup-link">
                    註冊
                    <i class="ace-icon fa fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="forgot-box" class="forgot-box widget-box no-border">
            <div class="widget-body">
              <div class="widget-main">
                <h4 class="header red lighter bigger">
                  <i class="ace-icon fa fa-key"></i>
                  密碼重設
                </h4>

                <div class="space-6"></div>
                <p>
                  輸入你的信箱
                </p>

                <form>
                  <fieldset>
                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="email" class="form-control" placeholder="Email" />
                        <i class="ace-icon fa fa-envelope"></i>
                      </span>
                    </label>

                    <div class="clearfix">
                      <button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
                        <i class="ace-icon fa fa-lightbulb-o"></i>
                        <span class="bigger-110">送出</span>
                      </button>
                    </div>
                  </fieldset>
                </form>
              </div>

              <div class="toolbar center">
                <a href="#" data-target="#login-box" class="back-to-login-link">
                  回登入
                  <i class="ace-icon fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div id="signup-box" class="signup-box widget-box no-border">
            <div class="widget-body">
              <div class="widget-main">
                <h4 class="header green lighter bigger">
                  <i class="ace-icon fa fa-users blue"></i>
                  註冊會員
                </h4>

                <div class="space-6"></div>
                <p> 輸入基本資料 </p>

                <form>
                  <fieldset>
                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="email" name="email" class="form-control" placeholder="Email" />
                        <i class="ace-icon fa fa-envelope"></i>
                      </span>
                    </label>

                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="text" name="name" class="form-control" placeholder="姓名" />
                        <i class="ace-icon fa fa-user"></i>
                      </span>
                    </label>

                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="text" name="account" class="form-control" placeholder="帳號" />
                        <i class="ace-icon fa fa-user"></i>
                      </span>
                    </label>

                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="password" name="password" class="form-control" placeholder="密碼" />
                        <i class="ace-icon fa fa-lock"></i>
                      </span>
                    </label>

                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">
                        <input type="password" name="apassword"  class="form-control" placeholder="再輸入一次密碼" />
                        <i class="ace-icon fa fa-retweet"></i>
                      </span>
                    </label>

                    <div class="space-24"></div>

                    <div class="clearfix">
                      <button type="reset" class="width-30 pull-left btn btn-sm">
                        <i class="ace-icon fa fa-refresh"></i>
                        <span class="bigger-110">重填</span>
                      </button>

                      <button type="button" name="registered" class="width-30 pull-right btn btn-sm btn-success">
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
            </div>
          </div>
        </div>
      </div>
    </div>
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
