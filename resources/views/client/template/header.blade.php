<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Double Drop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    @vite(["resources/css/app.css","resources/js/app.js","resources/sass/app.scss"])
    <script type="text/javascript" src="{{asset("js/jquery.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/instafeed.js")}}"></script>
    <script src="https://unpkg.com/vue-instagram@3.0.0"></script>
</head>
<body>
    @if ($page_destination != "home")
            <div class="artists">
        @else
            <div class="header">
    @endif

    <div class="navbar">
        <div class="container">
            <div class="logo"><a href="/">Double Drop</a></div>
            <ul class="nav-link">
                <li><a href="/">Home</a></li>
                <li><a href="/artists">Artistas</a></li>
                <li><a href="/contact">contacto</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-mobile">
        <div class="container">
            <div class="logo">
                <a href="/">Double Drop</a>
                <div class="bars" id="bars">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>

            <div id="nav-link-mobile" class="nav-link-mobile">
                <ul class="nav-link">
                    <li><a href="/">Home</a></li>
                    <li><a href="/artists">Artistas</a></li>
                    <li><a href="/">contacto</a></li>
                </ul>
            </div>
            
        </div>
    </div>

    
