<!DOCTYPE HTML>
<html>

<head>
    <title>Cari Kendaraan | About Us</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="SEA - Sertifikat" />
    <meta name="description" content="SEA Sertifikat adalah Website Untuk Mendata Sertifikat Yang Ada">
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

    <div class="global-wrap">
    @include('header')
        <div class="container">
            <h1 class="page-title">Tentang Kami</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="text-bigger">Felis turpis nostra arcu tempus rutrum hac ullamcorper torquent volutpat pellentesque adipiscing ut elementum sollicitudin sodales congue quam rutrum habitant accumsan elit scelerisque accumsan proin varius purus scelerisque taciti nam</p>
                    <p class="text-bigger">Venenatis diam malesuada faucibus euismod congue eleifend ultricies bibendum augue dapibus nostra diam amet tincidunt commodo ullamcorper lorem maecenas nibh</p>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-parallax" style="background-image:url(img/1280x852.png);"></div>
            <div class="bg-mask"></div>
            <div class="bg-holder-content">
                <div class="container">
                    <div class="gap gap-big text-white">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Work hard. Play hard.</h2>
                                <p class="text-bigger">Scelerisque ornare ante pellentesque id ad eget volutpat consequat aptent lacus penatibus consectetur vivamus magnis ornare venenatis mattis rhoncus interdum quam tempor commodo ultrices augue risus senectus ornare aliquam leo rutrum nam duis nisi fringilla convallis praesent libero faucibus fermentum convallis pretium aptent nisl morbi odio justo vel nascetur tristique pulvinar senectus etiam quam taciti dignissim etiam tincidunt cras molestie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2>Our Approach</h2>
            <div class="row">
                <div class="col-md-8">
                    <p class="text-bigger">Cubilia gravida mus senectus donec consectetur dis ac vel quis a suscipit potenti purus aptent nibh gravida aliquet vestibulum varius dictum consectetur semper consectetur at varius donec sociis habitasse vivamus eget faucibus tempus donec lorem etiam volutpat blandit aliquam varius molestie nibh mattis adipiscing sodales dictumst volutpat quam rhoncus sodales</p>
                </div>
            </div>
            </div>
        @include('template.cart')
        @include('../footer')

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
