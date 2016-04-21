
<!DOCTYPE HTML>
<html>

<head>
    <title>Cari Kendaraan | Sepeda</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Carikendaraan.id" />
    <meta name="description" content="Carikendaraan.id">
    <meta name="author" content="Intive Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::favicon('privasi/resources/views/template/img/logo.png') !!}
    {!! Html::style('privasi/resources/views/template/css/bootstrap.css') !!}
    {!! Html::style('privasi/resources/views/template/css/font-awesome.css') !!}
    {!! Html::style('privasi/resources/views/template/css/icomoon.css') !!}
    {!! Html::style('privasi/resources/views/template/css/styles.css') !!}
    {!! Html::style('privasi/resources/views/template/css/mystyles.css') !!}
    {!! Html::script('privasi/resources/views/template/js/modernizr.js') !!}
    {!! Html::script('privasi/resources/views/template/dist/sweetalert.css') !!}
    {!! Html::style('privasi/resources/views/template/css/cart.css') !!}

</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    @include('header')
        <div class="container">
            <h1 class="page-title">Cari Sepeda Impianmu</h1>
        </div>

        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                            <label>Nama Sepeda</label>
                            <input class="typeahead form-control" placeholder="Onthel, Polygon" type="text" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-daterange" data-date-format="MM d, D">
                            <div class="row">
                              <div class="col-md-5">
                                     <div class="form-group form-group-icon-left"><i class="fa fa-money input-icon input-icon-show"></i>
                                             <label>Harga Min</label>
                                             <input class="form-control" placeholder="Write something" type="text" />
                                     </div>
                                     </div>

                                     <div class="col-md-5">
                                     <div class="form-group form-group-icon-left">
                                     <i class="fa fa-money input-icon input-icon-show"></i>
                                             <label>Harga Max</label>
                                             <input class="form-control" placeholder="Write something" type="text" />
                                     </div>
                                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                          <div class="col-md-5">
                              <div class="form-group form-group-md form-group-select-plus">
                                  <label>Provinsi</label>
                                  <select class="form-control">
                                      <option> - Pilih Provinsi - </option>
                                      <option>Jawa Timur</option>
                                      <option>Jawa Tengah</option>
                                      <option>Jawa Barat</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="form-group form-group-md form-group-select-plus">
                                  <label>Kota</label>
                                  <select class="form-control">
                                      <option> - Pilih Kota - </option>
                                      <option>Semua</option>
                                  </select>
                              </div>
                          </div>

                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mt10" type="submit" value="Cari Sepeda" />
            </form>
            <div class="gap"></div>
            <h3 class="mb20">Daftar Sepeda</h3>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="{{ route('template.dproduk') }}">
                                {!! Html::image('privasi/resources/views/template/img/spd.jpg') !!}
                                <h5 class="hover-title-center">Detail</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="{{ route('template.dproduk') }}">Fixie Element Road frc 65</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Surabaya, ID</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Rp. 4.000.000</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="{{ route('template.dproduk') }}">
                                {!! Html::image('privasi/resources/views/template/img/spd.jpg') !!}
                                <h5 class="hover-title-center">Detail</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="{{ route('template.dproduk') }}">Fixie Element Road frc 65</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Surabaya, ID</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Rp. 4.000.000</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="{{ route('template.dproduk') }}">
                                {!! Html::image('privasi/resources/views/template/img/spd.jpg') !!}
                                <h5 class="hover-title-center">Detail</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="{{ route('template.dproduk') }}">Fixie Element Road frc 65</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Surabaya, ID</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Rp. 4.000.000</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="{{ route('template.dproduk') }}">
                                {!! Html::image('privasi/resources/views/template/img/spd.jpg') !!}
                                <h5 class="hover-title-center">Detail</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="{{ route('template.dproduk') }}">Fixie Element Road frc 65</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Surabaya, ID</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Rp. 4.000.000</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="gap gap-small"></div>
        </div>
        @include('template.cart')
        @include('footer')

        {!! Html::script('privasi/resources/views/template/js/jquery.js') !!}
        {!! Html::script('privasi/resources/views/template/js/bootstrap.js') !!}
        {!! Html::script('privasi/resources/views/template/js/slimmenu.js') !!}
        {!! Html::script('privasi/resources/views/template/js/bootstrap-datepicker.js') !!}
        {!! Html::script('privasi/resources/views/template/js/bootstrap-timepicker.js') !!}
        {!! Html::script('privasi/resources/views/template/js/nicescroll.js') !!}
        {!! Html::script('privasi/resources/views/template/js/dropit.js') !!}
        {!! Html::script('privasi/resources/views/template/js/ionrangeslider.js') !!}
        {!! Html::script('privasi/resources/views/template/js/icheck.js') !!}
        {!! Html::script('privasi/resources/views/template/js/fotorama.js') !!}
        {!! Html::script('privasi/resources/views/template/js/typeahead.js') !!}
        {!! Html::script('privasi/resources/views/template/js/card-payment.js') !!}
        {!! Html::script('privasi/resources/views/template/js/magnific.js') !!}
        {!! Html::script('privasi/resources/views/template/js/owl-carousel.js') !!}
        {!! Html::script('privasi/resources/views/template/js/fitvids.js') !!}
        {!! Html::script('privasi/resources/views/template/js/tweet.js') !!}
        {!! Html::script('privasi/resources/views/template/js/countdown.js') !!}
        {!! Html::script('privasi/resources/views/template/js/gridrotator.js') !!}
        {!! Html::script('privasi/resources/views/template/js/custom.js') !!}
        {!! Html::script('privasi/resources/views/template/dist/sweetalert.min.js') !!}
        @include('sweet::alert')
    </div>
</body>

</html>
