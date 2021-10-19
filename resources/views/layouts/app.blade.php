<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website criado em PHP. "/>
    <meta name="author" itemprop="Josanilton"/>

    <!-- ICON -->  
    <link id="favicon" rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" sizes="16x16" type="image/svg">
    <link id="favicon" rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" sizes="32x32" type="image/svg">
    <link id="favicon" rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" sizes="48x48" type="image/svg">

    <link rel="apple-touch-icon" sizes="48x48" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="256x256" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="384x384" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{ asset('images/favicon.svg') }}">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>Loja</title>
</head>
<body class="h-screen">
    <div class="landing-page">
        <header id="header" class="header">
            <div class="header-content">

                <a class="logotipo" href="{{ route('site.home') }}">
                    <img src="{{ asset('images/logoipsum-logo.svg') }}" alt="Logo">
                </a>
                
                <nav class="header-nav">
                    <ul>
                        <li><a href="{{ route('site.home') }}">Página Principal</a></li>
                        <li><a href="{{ route('site.products') }}">Produtos</a></li>
                        <li><a href="{{ route('site.blog') }}">Blog</a></li>
                        <li><a href="{{ route('site.contact') }}">Contato</a></li>
                        <li><a href="{{ route('site.about') }}">Sobre</a></li>
                    </ul>
                </nav>
                <!-- Hamburger button -->
                <div id="burgerToggle" class="burger-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </header>
        
        <!-- Hamburger menu list-->
        <div id="listMenu" class="list-menu">
            <ul>
                <li><a href="{{ route('site.home') }}">Página Principal</a></li>
                <li><a href="{{ route('site.products') }}">Produtos</a></li>
                <li><a href="{{ route('site.blog') }}">Blog</a></li>
                <li><a href="{{ route('site.contact') }}">Contato</a></li>
                <li><a href="{{ route('site.about') }}">Sobre</a></li>
            </ul>
        </div>

        <main class="main">
            @yield('content')
        </main>
        
        <footer class="footer">
            {{-- <div class="dots-pattern"></div> --}}
            <ul>
                <li>
                    <h4>Redes Sociais</h4>
                    <a href="{{ route('site.blog') }}">Blog</a>
                    <a href="https://www.facebook.com" target="_blank">Facebook</a>
                    <a href="https://www.youtube.com" target="_blank">Youtube</a>
                </li>
                <li>
                    <h4>Empresa</h4>
                    <a href="{{ route('site.products') }}">Nossos produtos</a>
                    <a href="{{ route('site.about') }}">Sobre nós</a>
                    <a href="{{ route('site.contact') }}">Entre em contato</a>
                </li>
                
                <li>
                    <h4>Contato</h4>
                    <a href="tel:+5571987860693">Telefone</a>
                    <a href="mailto:josanilton.filho@gmail.com">E-mail</a>
                </li>
            </ul>
        </footer>

        <section class="sub-footer">
            <a class="flex" href="{{ route('site.home') }}">
                <img class="w-4 mr-2" src="{{ asset('images/lock-icon.svg') }}" alt="Lock">
                <span class="font-normal">CMS</span>
            </a>
            <a href="http://github.com/josanilton" target="_blank">
                Design by 
                <strong>Josanilton</strong>
            </a>
        </section>
    </div>
</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>