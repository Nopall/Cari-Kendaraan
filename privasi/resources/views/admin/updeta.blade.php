<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Intive Studio Admin Template">
  <meta name="author" content="Intive Studio">

  <title>Update Artikel | Cari Kendaraan</title>

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

  <!-- Plugin -->
  {!! Html::style('privasi/resources/views/admin/assets/vendor/chartist-js/chartist.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/vendor/jvectormap/jquery-jvectormap.css') !!}

  <!-- Page -->
  {!! Html::style('privasi/resources/views/admin/assets/css/dashboard/v1.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/fonts/weather-icons/weather-icons.css') !!}

  <!-- Fonts -->
  {!! Html::style('privasi/resources/views/admin/assets/fonts/web-icons/web-icons.min.css') !!}
  {!! Html::style('privasi/resources/views/admin/assets/fonts/brand-icons/brand-icons.min.css') !!}


  <!--[if lt IE 9]>
  {!! Html::script('privasi/resources/views/admin/assets/vendor/html5shiv.min.js') !!}
    <![endif]-->

  <!--[if lt IE 10]>
  {!! Html::script('privasi/resources/views/admin/assets/vendor/media-match/media.match.min.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/respond/respond.min.js') !!}
    <![endif]-->

  <!-- Scripts -->
  {!! Html::script('privasi/resources/views/admin/assets/vendor/modernizr/modernizr.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/breakpoints/breakpoints.js') !!}
</head>
<body class="dashboard">

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        {!! Html::image('privasi/resources/views/admin/assets/images/logo.png', 'Intive Studio',array('class' => 'navbar-brand-logo')) !!}
        <span class="navbar-brand-text"> Intive Studio</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>

              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="slide-bottom"
            aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-id"></span>
            </a>

          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                {!! Html::image('privasi/resources/views/admin/assets/portraits/5.jpg') !!}
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  @if(Auth::check())
                  <i class="icon wb-user" aria-hidden="true"></i> {{ Auth::user()->name }} </a>
                  @endif
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="{{ url('logout') }}"><i class="icon wb-power" aria-hidden="true"></i>Log Out</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
              </li>

              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
              </li>

              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->

    </div>
  </nav>

  @include('admin.sidebar')

  <!-- Page -->
  <div class="page">
    <div class="page-content padding-30 container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xlg-6 col-md-12">

          {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@update', $blog->id], 'files' => true]) !!}
            <div class="form-group">
              {{ Form::label('Judul Artikel :', '', array('class' => 'example-title')) }}
              {!! Form::text('judul', null, array('class' => 'form-control'),'') !!}
            </div>

            <div class="form-group">
              {{ Form::label('tgl', 'Tanggal Posting :', array('class' => 'example-title')) }}
              {{ Form::text('tanggal', null, array('class' => 'form-control', 'readonly')) }}
            </div>

            <div class="form-group">
              {{ Form::label('Berita :', '', array('class' => 'example-title')) }}
              {{ Form::textarea('berita', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
              {{ Form::label('lblNo', '', array('class' => 'sr-only')) }}
              <img src="{!! asset($blog->gambar) !!}" alt="Gambar" style="width:50%; height:50%;">
            </div>

            <div class="form-group">
              {{ Form::file('file', '', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
              {{ Form::submit('Update', ['class' => 'btn btn-primary waves-effect waves-light']) }}
            </div>
          {!! Form::close() !!}

        </div>

      </div>
    </div>
  </div>
  <!-- End Page -->

  <!-- Footer -->
  @include('admin.footer')

  <!-- Core  -->
  {!! Html::script('privasi/resources/views/admin/assets/vendor/jquery/jquery.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/bootstrap/bootstrap.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/animsition/jquery.animsition.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/asscroll/jquery-asScroll.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/mousewheel/jquery.mousewheel.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/asscrollable/jquery.asScrollable.all.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/ashoverscroll/jquery-asHoverScroll.js') !!}

 <!-- Plugins -->
  {!! Html::script('privasi/resources/views/admin/assets/vendor/switchery/switchery.min.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/intro-js/intro.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/screenfull/screenfull.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/slidepanel/jquery-slidePanel.js') !!}

  {!! Html::script('privasi/resources/views/admin/assets/vendor/skycons/skycons.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/chartist-js/chartist.min.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/aspieprogress/jquery-asPieProgress.min.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/jvectormap/jquery-jvectormap.min.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/vendor/matchheight/jquery.matchHeight-min.js') !!}

  <!-- Scripts -->
  {!! Html::script('privasi/resources/views/admin/assets/js/core.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/site.js') !!}

  {!! Html::script('privasi/resources/views/admin/assets/js/sections/menu.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/sections/menubar.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/sections/sidebar.js') !!}

  {!! Html::script('privasi/resources/views/admin/assets/js/configs/config-colors.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/configs/config-tour.js') !!}

  {!! Html::script('privasi/resources/views/admin/assets/js/components/asscrollable.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/components/animsition.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/components/slidepanel.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/components/switchery.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/components/matchheight.js') !!}
  {!! Html::script('privasi/resources/views/admin/assets/js/components/jvectormap.js') !!}

  {!! Html::script('//cdn.tinymce.com/4/tinymce.min.js') !!}
  <script>tinymce.init({ selector:'textarea' });</script>

</body>

</html>
