<!DOCTYPE HTML>
<html>

<head>
    <title>Cari Kendaraan | Portal</title>


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
    {!! Html::style('privasi/resources/views/template/css/cart.css') !!}

</head>

<body>

@include('header')

    <div class="global-wrap">
        <!-- TOP AREA -->
            @include('top')
                <!--/ END TOP AREA-->

        <div class="gap"></div>


        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row row-wrap" data-gutter="120">
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-dollar box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Lorem Ipsum Dolor Sit Amet</h4>
                                    <p class="thumb-desc">Lorem Ipsum Dolor Sit Amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-briefcase box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Lorem Ipsum Dolor Sit Amet</h4>
                                    <p class="thumb-desc">Lorem Ipsum Dolor Sit Amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-send box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Lorem Ipsum Dolor Sit Amet</h4>
                                    <p class="thumb-desc">Lorem Ipsum Dolor Sit Amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-thumbs-o-up box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Lorem Ipsum Dolor Sit Amet</h4>
                                    <p class="thumb-desc">Lorem Ipsum Dolor Sit Amet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="gap"></div>
            <h1 class="text-center mb20">Baru Ditambahkan</h1>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                {!! Html::image('privasi/resources/views/template/img/car.jpg') !!}
                                <h5 class="hover-title-center">Detail</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">ini Mobil</a></h5>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Rp.394</span>
                            </p>
                        </div>
                    </div>
                </div>

                    </div>
                </div>

            <div class="gap gap-small"></div>
        </div>
        </div>
        @include('template.cart')
        @include ('footer')

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
    </div>
</body>

</html>
