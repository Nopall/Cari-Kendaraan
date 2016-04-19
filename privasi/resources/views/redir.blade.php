<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Cari Kendaraan | Redirect</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Carikendaraan.id" />
    <meta name="description" content="Carikendaraan.id">
    <meta name="author" content="Intive Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    {!! Html::style('privasi/resources/views/template/css/font-awesome.css') !!}
    <!-- Libs CSS -->
    {!! Html::style('privasi/resources/views/template/css/bootstrap.css') !!}
    <!-- Template CSS -->
    {!! Html::style('privasi/resources/views/template/inc/style.css') !!}
    <!-- Responsive CSS -->
    {!! Html::style('privasi/resources/views/template/inc/respons.css') !!}
    <!-- Favicons -->
    {!! Html::favicon('privasi/resources/views/template/img/logo.png') !!}

</head>
<body>

    <!-- Load page -->
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <!-- End load page -->


    <!-- Content Wrapper -->
    <div id="wrapper">

        <!-- Car -->
        <div class="car_and_driver">
            <div class="car"></div>
            <div class="hand"></div>
        </div>
        <!-- End Car -->

        <div id="countmesg" class="title">
        </div>

    </div>
    <!-- end Content Wrapper -->

    <!-- Footer -->
    <footer id="footer">
        <div class="container">

            <!-- footer socials -->
            <div class="row">

                <div class="footer_socials col-sm-12 text-center">

                    <div class="contact_icons">
                        <ul class="contact_socials clearfix">
                            <!-- social icons -->
                            <li><a class="ukie_social" href="http://fb.com/outattackers"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="ukie_social" href="http://twitter.com/outattacker"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="ukie_social" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="ukie_social" href="http://linkedin.com/in/krisnasw"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="ukie_social" href="#"><i class="fa fa-youtube"></i></a></li>

                        </ul>
                    </div>

                    <div class="copyright">Copyright @2016 Intive Studio - All Right Reserved</div>

                </div>

            </div>
            <!-- end footer socials -->

        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->


    <!-- Scripts -->
    {!! Html::script('privasi/resources/views/template/inc/jquery-1.11.2.min.js') !!}
    {!! Html::script('privasi/resources/views/template/js/bootstrap.js') !!}
    {!! Html::script('privasi/resources/views/template/inc/modernizr.custom.js') !!}
    {!! Html::script('privasi/resources/views/template/inc/jquery.nicescroll.min.js') !!}
    {!! Html::script('privasi/resources/views/template/inc/jquery.lwtCountdown-1.0.js') !!}
    {!! Html::script('privasi/resources/views/template/inc/scripts.js') !!}

    <script>
    $(document).ready(function() {
      var delay = 10 ;
      var url = "http://mobil123.com";

    function countdown() {
      setTimeout(countdown, 1000) ;
        $('#countmesg').html("You Will Redirecting in "  + delay  + " seconds.");
        delay --;
      if (delay < 0 ) {
        window.location = url ;
        delay = 0 ;
        }
      }
    countdown() ;
    });
    </script>

</body>
</html>
