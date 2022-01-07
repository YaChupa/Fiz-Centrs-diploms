<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Centrs @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=6TmzS8RpLHwRSN8aIdxeqBkeMHJuUr6MTSLyvzscycSDRblekb8jtKSxI50ZZnci" charset="UTF-8"></script><script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
    
    <link href="css/app.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">FIZ un FIT CENTRS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">  
            <ul class="nav navbar-nav">
                <li ><a href="{{route('index')}}">Galvena lapa</a></li>
                <li ><a href="{{route('categories')}}">Pakalpojumi</a></li>
                @guest
                <li ><a href="{{route('query')}}">Pierakstities</a></li> 
                @else
                @auth
                @if(auth()->user()->isUser())
                <li ><a href="{{route('query')}}">Pierakstities</a></li> 
                @endif
                @endauth
                @endguest
                @auth
                @if(auth()->user()->isUser())
                <li ><a href="{{route('userprofile')}}">Medicīnas karte</a></li>
                @endif
                @endauth
                @auth
                @if(auth()->user()->isWorker())
                <li ><a href="{{route('profiles')}}">Kartes</a></li>
                <li ><a href="{{route('queries')}}">Pieraksti</a></li>  
                @endif
                @endauth
            </ul>

            <ul class="nav navbar-nav navbar-right">
                
                                    @guest
                                     <li><a href="{{ route('login') }}">Ieiet</a></li>
                                     <li><a href="{{ route('register') }}">Reģistrēties</a></li>
                                    @endguest
                                   
                                    @auth
                                    @if(auth()->user()->isAdmin())
                                    <li><a href="{{ route('admin') }}">Administratora panele</a></li>
                                    @endif
                                    <li><a href="{{ route('get-logout') }}">Iziet</a></li>
                                    @endauth
                                 
                
                            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>


