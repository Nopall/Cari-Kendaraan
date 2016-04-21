
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Forgot password | Cari Kendaraan</title>

  <link rel="shortcut icon" href="privasi/resources/views/admin/assets/images/favicon.ico">

  <!-- Stylesheets -->
  {!! Html::style('privasi/resources/views/admin/assets/css/bootstrap.min.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/css/bootstrap-extend.min.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/css/site.min.css') !!}

  {!! Html::style('privasi/resources/views/admin/assets/vendor/animsition/animsition.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/vendor/asscrollable/asScrollable.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/vendor/switchery/switchery.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/vendor/intro-js/introjs.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/vendor/slidepanel/slidePanel.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/vendor/flag-icon-css/flag-icon.css') !!}
  {!! Html::script('privasi/resources/views/template/dist/sweetalert.css') !!}


  <!-- Page -->
  {!! Html::style('privasi/resources/views/admin/assets/css/pages/forgot-password.css') !!}

  <!-- Fonts -->
  <link rel="stylesheet" href="privasi/resources/views/admin/assets/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="privasi/resources/views/admin/assets/fonts/brand-icons/brand-icons.min.css">

  <!-- Scripts -->
  <script src="privasi/resources/views/admin/assets/vendor/modernizr/modernizr.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-forgot-password layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <h2 class="page-title">Forgot Your Password ?</h2>
      <p>Input your registered username to reset your password</p>

      <form class="width-300 margin-top-30 center-block">
        <div class="form-group">
          <input type="text" class="form-control" id="inputEmail" name="username" placeholder="Your Username">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Reset Your Password</button>
        </div>
      </form>

      <footer class="page-copyright">
        <p>Cari Kendaraan By Intive Studio</p>
        <p>© 2016. All RIGHT RESERVED.</p>
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="privasi/resources/views/admin/assets/vendor/jquery/jquery.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="privasi/resources/views/admin/assets/vendor/switchery/switchery.min.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/intro-js/intro.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/screenfull/screenfull.js"></script>
  <script src="privasi/resources/views/admin/assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="privasi/resources/views/admin/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

  <!-- Scripts -->
  <script src="privasi/resources/views/admin/assets/js/core.js"></script>
  <script src="privasi/resources/views/admin/assets/js/site.js"></script>

  <script src="privasi/resources/views/admin/assets/js/sections/menu.js"></script>
  <script src="privasi/resources/views/admin/assets/js/sections/menubar.js"></script>
  <script src="privasi/resources/views/admin/assets/js/sections/sidebar.js"></script>

  <script src="privasi/resources/views/admin/assets/js/configs/config-colors.js"></script>
  <script src="privasi/resources/views/admin/assets/js/configs/config-tour.js"></script>

  <script src="privasi/resources/views/admin/assets/js/components/asscrollable.js"></script>
  <script src="privasi/resources/views/admin/assets/js/components/animsition.js"></script>
  <script src="privasi/resources/views/admin/assets/js/components/slidepanel.js"></script>
  <script src="privasi/resources/views/admin/assets/js/components/switchery.js"></script>
  <script src="privasi/resources/views/admin/assets/js/components/jquery-placeholder.js"></script>


  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>
