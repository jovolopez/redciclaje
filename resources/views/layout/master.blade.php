<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Redciclaje</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    @yield('css')
</head>
<body>

    <div class="loading">
        <img src="/storage/icon.png" alt="Redciclaje" srcset="" width="100px" class="animated flip infinite">
    </div>

    <header>
        <div class="top-header-line">
            <div class="logo-cont">
                <a href="/">
                    <img src="/storage/logo.svg" alt="Redciclaje" srcset="">
                </a>
            </div>
            <div class="burger-menu">
                <img src="/storage/menu.svg" alt="Burger Menu" srcset="">
            </div>
        </div>
        <div class="bot-header-line">
            <ul class="nav-bar">
                <li><a href="/como-reciclar">Cómo redciclar</a></li>
                <li><a href="/mapa">Mapa</a></li>
                <li><a href="/actualidad-y-eventos">Actualidad y eventos</a></li>
                <li><a href="/chile-emprende">Chile emprende</a></li>
                <li><a href="/plataforma">Plataforma Redciclar</a></li>
            </ul>
        </div>
        <div class="vertical-header-menu">
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
            Made with <img src="/storage/heart-icon.svg" alt="Love" width="13px"> in <img src="/storage/logo.svg" alt="Redciclaje" width="115px" class="logo-footer">

        </div>
    </footer>
    <script>
        let body    = document.querySelector('body');
        let a       = document.querySelector('a');
        let loading = document.querySelector('.loading');
        let menuBtn = document.querySelector('.burger-menu');
        let menu    = document.querySelector('.vertical-header-menu');

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