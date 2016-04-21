<!DOCTYPE HTML>
<html>

<head>
    <title>Carikendaraan | Blog</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Carikendaraan.id" />
    <meta name="description" content="Carikendaraan.id">
    <meta name="author" content="Intive Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="privasi/resources/views/template/img/logo.png">

    {!! Html::style('privasi/resources/views/template/css/bootstrap.css') !!}
    {!! Html::style('privasi/resources/views/template/css/font-awesome.css') !!}
    {!! Html::style('privasi/resources/views/template/css/icomoon.css') !!}
    {!! Html::style('privasi/resources/views/template/css/styles.css') !!}
    {!! Html::style('privasi/resources/views/template/css/mystyles.css') !!}
    {!! Html::script('privasi/resources/views/template/js/modernizr.js') !!}
    {!! Html::style('privasi/resources/views/template/css/cart.css') !!}


</head>

<body>

    <div class="global-wrap">

        @include('header')

        <div class="container">
            <h4 class="page-title">Cari Kendaraan | Blog</h4>
        </div>

        <div class="container">
            <!-- START BLOG POST -->
              @foreach($blog as $vlog)
            <div class="article post">
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">{{ $vlog->judul }}</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">{{ $vlog->tanggal }}</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Admin</a>
                        </li>
                    </ul>
                    <p class="post-desciption">
                      {{ $vlog->berita }}
                    </p>
                    <a class="btn btn-small btn-primary" href="./post">Read More</a>
                </div>
            </div>
              @endforeach
            <!-- END BLOG POST -->

            <ul class="pagination">
                {{ $blog->links() }}
            </ul>
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
    </div>
</body>

</html>
