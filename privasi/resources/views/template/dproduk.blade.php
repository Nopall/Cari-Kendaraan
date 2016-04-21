
<!DOCTYPE HTML>
<html>

<head>
    <title>Cari Kendaraan | Detail Produk</title>

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
    <div class="global-wrap">
        @include('header')
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">Kategori</a>
                </li>
                <li class="active">Nama Produk</li>
            </ul>
            <div class="booking-item-details">
                <header class="booking-item-header">
                </header>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tabbable booking-details-tabbable">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                                        {!! Html::image('privasi/resources/views/template/img/car.jpg') !!}
                                        {!! Html::image('privasi/resources/views/template/img/motor') !!}
                                        {!! Html::image('privasi/resources/views/template/img/spd.jpg') !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="google-map-tab">
                                    <div id="map-canvas" style="width:100%; height:500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="booking-item-meta">
                            <h2 class="lh1em mt40">Audi UK</h2>
                            <p /><span class="text-lg"><i class="fa fa-map-marker"></i> Jalan. Surabaya </span>
                            <p /><span class="text-lg"><a href="#"><i class="fa fa-user"></i> user@mobil123.com </span></a>
                            <p /><span class="text-lg"><a href="http://mobil123.com "><i class="fa fa-globe"></i> mobil123.com  </span></a>
                            <p /><span class="text-lg"><i class="fa fa-phone"></i> +62 (856) 123-4567 </span>
                            <p /><span class="text-lg"><i class="fa fa-rss"></i> Lorem Ipsum Dolor Sit Amet </span>
                            <p /><span class="text-lg">Rp. 410.000.000</span></p>
                            <a class="btn btn-primary" href="{{ route('redir') }}">Kunjungi Penjual</a>
                            <a class="btn btn-danger" href="{{ route('redir') }}">Bandingkan</a>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                </div>
                <div class="gap"></div>
                <h3>Produk Sejenis</h3>
                <div class="row">
                    <div class="col-md-9">
                        <div class="gap gap-small"></div>
                        <ul class="booking-list">
                            <li>
                                <a class="booking-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            {!! Html::image('privasi/resources/views/template/img/spd.jpg') !!}
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="booking-item-title">Fixie Element Road frc 65</h5>
                                            <p class="text-small">Tellus auctor sem sociosqu cras cursus vitae erat aliquam adipiscing iaculis suscipit curabitur</p>
                                        </div>
                                        <div class="col-md-5"><span class="booking-item-price">Rp. 4.000.000</span>
                                          <span class="btn btn-primary">Lihat Produk</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <h3 class="mb20">Produk Review</h3>
                <div class="row row-wrap">
                    <div class="col-md-8">
                        <div class="fb-comments" data-href="http://carikendaraan.id" data-width="1140" data-numposts="10"></div>
                        <div class="row wrap">
                            <div class="col-md-5">

                            </div>
                            <div class="col-md-7">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a>
                                    </li>
                                    <li><a href="#">2</a>
                                    </li>
                                    <li><a href="#">3</a>
                                    </li>
                                    <li><a href="#">4</a>
                                    </li>
                                    <li><a href="#">5</a>
                                    </li>
                                    <li><a href="#">6</a>
                                    </li>
                                    <li><a href="#">7</a>
                                    </li>
                                    <li class="dots">...</li>
                                    <li><a href="#">43</a>
                                    </li>
                                    <li class="next"><a href="#">Next Page</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="gap gap-small"></div>

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
