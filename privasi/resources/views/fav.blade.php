
<!DOCTYPE HTML>
<html>

<head>
    <title>Cari Kendaraan | Wishlist</title>

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
    {!! Html::style('privasi/resources/views/template/css/cart.css') !!}
    {!! Html::script('privasi/resources/views/template/js/modernizr.js') !!}
    {!! Html::script('privasi/resources/views/template/dist/sweetalert.css') !!}
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
            <h1 class="page-title">Your Wishlist</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <ul class="booking-list booking-list-wishlist">
                        <li><span class="booking-item-wishlist-title"><i class="fa fa-shopping-cart"></i> Motor</span>
                            <a class="fa fa-times booking-item-wishlist-remove" href="#" rel="tooltip" data-placement="top" title="remove from wishlist"></a>
                            <a class="booking-item" href="{{route('redir')}}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            {!! Html::image('privasi/resources/views/template/img/motor') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                        </div>
                                        <h5 class="booking-item-title">Brum Brum</h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"></i> Surabaya, INA</p>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price">Rp. 188</span>
                                      <span class="btn btn-primary">Kunjungi Penjual</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><span class="booking-item-wishlist-title"><i class="fa fa-shopping-cart"></i> Sepeda</span>
                            <a class="fa fa-times booking-item-wishlist-remove" href="#" rel="tooltip" data-placement="top" title="remove from wishlist"></a>
                            <a class="booking-item" href="{{route('redir')}}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            {!! Html::image('privasi/resources/views/template/img/spd.jpg') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                        </div>
                                        <h5 class="booking-item-title">Kring Kring</h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"></i> Surabaya, INA</p>

                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price">Rp. 300</span>
                                      <span class="btn btn-primary">Kunjungi Penjual</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gap"></div>
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
