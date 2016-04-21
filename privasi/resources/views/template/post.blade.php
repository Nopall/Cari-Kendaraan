
<!DOCTYPE HTML>
<html>

<head>
    <title>Cari Kendaraan | Blog</title>

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
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.6&appId=451303015068704";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="global-wrap">
        @include('header')
        <div class="container">
                    <h1 class="page-title">Detail Blog</h1>
                    <hr />
                </div>
        <div class="container">
          @foreach($blog as $vlog)
            <article class="post">
                <div class="post-inner">
                    <img src="{!! asset($vlog->gambar) !!}" alt="Blog Image" class="imgLoad">
                    <p />
                    <h4 class="post-title text-darken">{!! $vlog->judul !!}</h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">{!! $vlog->tanggal !!}</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Admin</a>
                        </li>
                    </ul>
                    <p>{!! $vlog->berita !!}</p>
                  </div>
            </article>
          @endforeach
            <h2>Komentar</h2>
            <!-- START COMMENTS -->
            <div class="fb-comments" data-href="http://carikendaraan.id" data-width="1140" data-numposts="10"></div>
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

    <script>
    $(document).ready(function()
    {
        $(".imgLoad").error(function(){
            $(this).attr('src', '../../public/img/blog.png');
        });
    });

    $(document).ready(function()
    {
      $(".imgLoad").onload(function(){
        $(this).attr('src', '../../public/img/ajax-loader.gif');
      });
    });
    </script>

</body>

</html>
