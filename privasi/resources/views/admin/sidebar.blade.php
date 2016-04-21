@yield('content')
<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">Main Menu</li>
            <li class="site-menu-item has-sub">
              <a href="{{ url('/admin/dashboard') }}" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Artikel</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  {!! Html::linkRoute('admin.formin','Input Artikel', array(), array('class' => 'animsition-link', 'data-slug' => 'layout-headers')) !!}
                </li>
                <li class="site-menu-item">
                </li>
              </ul>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  {!! Html::linkRoute('admin.csv','Data Artikel', array(), array('class' => 'animsition-link', 'data-slug' => 'layout-headers')) !!}
                </li>
                <li class="site-menu-item">
                </li>
              </ul>
          </ul>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="{{ route('index') }}" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
