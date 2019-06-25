<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EIXO FERROVIÁRIO TUBULAR / Rail axle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sicoob" />
    <meta name="keywords" content="Sicoob, Sicoobcard, Sicoob Consórcios" />
    <meta name="author" content="Junior Ferreira" />
    <link rel="icon" href="{{asset('site/images/favicon.png')}}">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
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

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135406050-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-135406050-1');
    </script>


    <!-- Global site tag (gtag.js) - Google Ads: 792215321 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-792215321"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-792215321');
    </script>


</head>

<body>

    @yield('content')

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>



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

    <!-- cycle2 -->
    {{-- <script src="http://malsup.github.io/jquery.cycle2.js"></script>
    <script src="http://malsup.github.io/jquery.cycle2.swipe.js"></script> --}}
    <script src="{{asset('site/js/owl.carousel.min.js')}}"></script>


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