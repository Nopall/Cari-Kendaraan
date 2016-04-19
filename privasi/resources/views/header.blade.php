<header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="./">
                                {{-- <img src="privasi/resources/views/template/img/logo-invert.png" alt="Image Alternative text" title="Image Title" /> --}}
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control" placeholder="Search Here ... ">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="privasi/resources/views/template/img/40x40.png" alt="Image Alternative text" title="AMaze" />Hi, Guest</a>
                                    </li>
                                    <li><a href="#">Sign Out</a>
                                    </li>
                                    <li class="nav-drop"><a href="#">IDR Rp</a>
                                    </li>
                                    <li class="top-user-area-lang nav-drop">
                                        <a href="#">
                                            <img src="privasi/resources/views/template/img/flags/32/id.png" alt="Image Alternative text" title="Image Title" />INA
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li>{!! Html::linkRoute('index', 'Home') !!}
                        </li>
                        <li>{!! Html::linkRoute('template.mobil', 'Mobil') !!}
                        </li>
                        <li>{!! Html::linkRoute('template.motor', 'Motor') !!}
                        </li>
                        <li>{!! Html::linkRoute('template.sepeda', 'Sepeda') !!}
                        </li>
                        <li>{!! Html::linkRoute('template.about', 'About') !!}
                        </li>
                        <li>{!! Html::linkRoute('template.blog', 'Blog') !!}
                        </li>
                    </ul>
                </div>
            </div>
        </header>
