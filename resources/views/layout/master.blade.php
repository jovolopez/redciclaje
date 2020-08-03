<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Redciclaje</title>
    <link rel="shortcut icon" href="/storage/icon.svg" type="image/x-icon">
    <link rel="icon" href="/storage/icon.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    @yield('css')
</head>
<body>

    <div class="loading">
        <img src="/storage/icon.png" alt="Redciclaje" srcset="" width="100px" class="animated flip infinite">
    </div>

    <header>
        <div class="top-bar">
            <div class="logo-cont">
                <a href="/">
                    <img src="/storage/logo-new.svg" alt="Redciclaje" srcset="">
                </a>
            </div>
            <div class="hamburger-menu">
                <img src="/storage/menu.svg" alt="Hamburger Menu" srcset="">
            </div>
        </div>
        <div class="bot-bar">
            <ul class="nav-bar">
                <li><a href="/como-reciclar">Cómo redciclar</a></li>
                <li><a href="/mapa">Mapa</a></li>
                <li><a href="/actualidad-y-eventos">Actualidad y eventos</a></li>
                <li><a href="/chile-emprende">Chile emprende</a></li>
                <li><a href="/plataforma">Plataforma Redciclar</a></li>
            </ul>
        </div>
        <div class="menu-mobile">
            <ul>
                <li><a href="/como-reciclar">Cómo redciclar</a></li>
                <hr>
                <li><a href="/mapa">Mapa</a></li>
                <hr>
                <li><a href="/actualidad-y-eventos">Actualidad y eventos</a></li>
                <hr>
                <li><a href="/chile-emprende">Chile emprende</a></li>
                <hr>
                <li><a href="/plataforma">Plataforma Redciclar</a></li>
                <hr>
            </ul>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-text">
            <p>Made with 
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">    
                    </path>
                </svg>
             in <img src="/storage/logo-new.svg" alt="Redciclaje" width="115px" class="logo-footer"></p>

        </div>
    </footer>
    <script>
        let body    = document.querySelector('body');
        let a       = document.querySelector('a');
        let loading = document.querySelector('.loading');
        let menuBtn = document.querySelector('.hamburger-menu');
        let menu    = document.querySelector('.menu-mobile');

        window.onload = function() {
            loading.style.opacity = 0;
            setTimeout(function () {
                body.removeChild(loading);
            }, 100);
        };

        a.onclick = function() {
            body.style.opacity = 0;
        };

        menuBtn.onclick = function() {
            menu.classList.toggle('active');
        }
    </script>
    @yield('script')
</body>
</html>