<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Vallourec</title>

    <link rel="icon" href="{{asset('site/images/favicon.png')}}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <img class="brand" src="{{asset('site/images/logovallourec.png')}}" alt="Vallourec">
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            {{--  <li><a href="{{ route('login') }}">Login</a></li>  --}}
                            {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                        @else
                            <li>
                                <a href="javascript:void(0);" class="cursor-default">{{ Auth::user()->name }}</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <span class="btn-logout">Sair</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <script>
           function updateRound(id){
                $.post( "/round-update", { 
                    id: id, 
                    date: $('#date'+id).val(),
                    result_a: $('#result_a'+id).val(),
                    result_b: $('#result_b'+id).val(),
                    order: $('#order'+id).val(), 
                    _token: $('#_token').val() 
                })
                .done(function( data ) {
                    location.reload();
                });
           }
    </script>
</body>
</html>
