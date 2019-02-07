<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vallourec</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sicoob" />
    <meta name="keywords" content="Sicoob, Sicoobcard, Sicoob Consórcios" />
    <meta name="author" content="Junior Ferreira" />
    <link rel="icon" href="{{asset('site/images/favicon.png')}}">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('site/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('site/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('site/css/magnific-popup.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('site/css/flexslider.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('site/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('site/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
  
    @yield('content')

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- Código do Google para tag de remarketing -->
    <!--------------------------------------------------
    As tags de remarketing não podem ser associadas a informações pessoais de identificação nem inseridas em páginas relacionadas a categorias de confidencialidade. Veja mais informações e instruções sobre como configurar a tag em: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 856107660;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>

    <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
    </script>

    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/856107660/?guid=ON&amp;script=0"/>
        </div>
    </noscript>

    <!-- jQuery -->
    <script src="{{asset('site/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('site/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('site/js/jquery.waypoints.min.js')}}"></script>
    <!-- Stellar Parallax -->
    <script src="{{asset('site/js/jquery.stellar.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('site/js/jquery.flexslider-min.js')}}"></script>
    <!-- countTo -->
    <script src="{{asset('site/js/jquery.countTo.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('site/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('site/js/magnific-popup-options.js')}}"></script>
    <!-- Count Down -->
    <script src="{{asset('site/js/simplyCountdown.js')}}"></script>

    <script src="{{asset('site/js/jquery.validate.min.js')}}"></script>

    <!-- JqueryUI -->
    <script src="http://malsup.github.io/jquery.cycle2.js"></script>

    <!-- Main -->
    <script src="{{asset('site/js/main.js')}}"></script>

    @stack('scripts')

    <script>
        function navigation(dr, id){
            if(dr === 'right'){
                $.get( "/next/"+id, function( data ) {
                    if(data !== 'false'){
                        $('.showrodadas').html(data);
                    } 
                });
            }else{
                $.get( "/prev/"+id, function( data ) {
                    if(data !== 'false'){
                        $('.showrodadas').html(data);
                    } 
                });
            }
        }
    </script>


</body>
</html>