<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="http://www.calodging.com/favicon.ico">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="padding-top: 83px;">
    <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand font" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                
                @if(Auth::user())    
                    <ul class="nav navbar-nav pull-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle subsytem" data-toggle="dropdown"><b>Room administration</b> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="subsytem {{is_current_page('/roomcategories') ? 'active' : ''}}"><a href="/roomcategories">Room categories</a></li>
                                <li class="subsytem {{is_current_page('/rooms') ? 'active' : ''}}"><a href="/rooms">Rooms</a></li>
                            </ul>
                        </li>
                        <li class="subsytem {{is_current_page('/pricing') ? 'active' : ''}}"><a href="/pricing"><b>Pricing</b></a></li>
                        <li class="subsytem"><a href="#"><b>Web reservation</b></a></li>
                        <li class="subsytem"><a href="#"><b>Front desk</b></a></li>
                    </ul>
                @endif
                
                </div>

            </div>
        </nav>
        
        @if (count($errors) > 0)
            <div class="container">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>    
        @endif
        
        @if (session()->has('flash_notification.message'))
            <div class="container">
                <div class="alert alert-{{ session('flash_notification.level') }}">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        
                    {{ session('flash_notification.message') }}
                </div>
            </div>    
        @endif
        
        @yield('content')
        
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
</body>
</html>