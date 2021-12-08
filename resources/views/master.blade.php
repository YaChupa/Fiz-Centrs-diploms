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
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">FIZ Centrs</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">  
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('index')}}">Galvena lapa</a></li>
                <li ><a href="{{route('categories')}}">Uslugi</a></li>
                <li ><a href="{{route('query')}}">Zapisatsa</a></li> 
                <li ><a href="{{route('profiles')}}">Klienti</a></li>   
 
            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{route('index')}}">Login</a></li>
                
                            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>


