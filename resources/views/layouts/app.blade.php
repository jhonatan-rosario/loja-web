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
        <header id="header" 
        {{-- border-b border-gray-300 --}}
            class="header">
            <div class="header-content">

                <a class="logotipo" href="{{ route('site.home') }}">
                    <img class="w-24 sm:w-28 md:w-36 lg:w-48 min-w-max" src="{{ asset('images/logoipsum-logo.svg') }}" alt="Logo">
                </a>
                
                <nav class="hidden md:block">
                    <ul class="flex flex-row list-none md:space-x-3 lg:space-x-6 text-indigo-700 text-base font-medium">
                        <li><a class="py-2 px-3 rounded hover:bg-indigo-100" href="{{ route('site.home') }}">Página Principal</a></li>
                        <li><a class="py-2 px-3 rounded hover:bg-indigo-100" href="{{ route('site.products') }}">Produtos</a></li>
                        <li><a class="py-2 px-3 rounded hover:bg-indigo-100" href="{{ route('site.blog') }}">Blog</a></li>
                        <li><a class="py-2 px-3 rounded hover:bg-indigo-100" href="{{ route('site.contact') }}">Contato</a></li>
                        <li><a class="py-2 px-3 rounded hover:bg-indigo-100" href="{{ route('site.about') }}">Sobre</a></li>
                    </ul>
                </nav>
                <!-- Hamburger button -->
                {{-- px-4 py-2 cursor-pointer rounded hover:bg-indigo-100 --}}
                <div id="burgerToggle" class="select-none font-s md:hidden">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </header>
        
        <!-- Hamburger menu list-->
        <div id="listMenu" class="list-menu flex justify-center pt-10 fixed z-40 w-full h-full bg-indigo-500 opacity-100 text-white">
            <ul class="flex flex-col font-semibold space-y-6 justify-start items-center">
                <li><a href="{{ route('site.home') }}">Página Principal</a></li>
                <li><a href="{{ route('site.products') }}">Produtos</a></li>
                <li><a href="{{ route('site.blog') }}">Blog</a></li>
                <li><a href="{{ route('site.contact') }}">Contato</a></li>
                <li><a href="{{ route('site.about') }}">Sobre</a></li>
            </ul>
        </div>

        <main class="main bg-gray-200">
            @yield('content')
        </main>
        
        <footer class="footer flex py-10 px-5 lg:px-10 justify-center items-center relative border-t-4 border-indigo-800">
            {{-- <div class="dots-pattern"></div> --}}
            <ul class="flex flex-col sm:flex-row sm:space-x-32 md:space-x-40 lg:space-x-60">
                <li class="flex flex-col mb-3 sm:mb-0 justify-start items-center sm:justify-start sm:items-start">
                    <h4 class="mb-1 text-indigo-900 text-base font-medium">Redes Sociais</h4>
                    <a class="mb-2 text-gray-600 text-sm font-normal" href="{{ route('site.blog') }}">Blog</a>
                    <a class="mb-2 text-gray-600 text-sm font-normal" href="https://www.facebook.com" target="_blank">Facebook</a>
                    <a class="text-gray-600 text-sm font-normal" href="https://www.youtube.com" target="_blank">Youtube</a>
                </li>
                <li class="flex flex-col mb-3 sm:mb-0 justify-start items-center sm:justify-start sm:items-start">
                    <h4 class="mb-1 text-indigo-900 text-base font-medium">Empresa</h4>
                    <a class="mb-2 text-gray-600 text-sm font-normal" href="{{ route('site.products') }}">Nossos produtos</a>
                    <a class="mb-2 text-gray-600 text-sm font-normal" href="{{ route('site.about') }}">Sobre nós</a>
                    <a class="text-gray-600 text-sm font-normal" href="{{ route('site.contact') }}">Entre em contato</a>
                </li>
                <li class="flex flex-col justify-start items-center sm:justify-start sm:items-start">
                    <h4 class="mb-1 text-indigo-900 text-base font-medium">Contato</h4>
                    <a class="mb-2 text-gray-600 text-sm font-normal" href="tel:+5571987860693">Telefone</a>
                    <a class="text-gray-600 text-sm font-normal" href="mailto:josanilton.filho@gmail.com">E-mail</a>
                </li>
            </ul>
        </footer>

        <section class="sub-footer flex justify-between items-center px-5 lg:px-10 border-t border-gray-300 bg-white">
            <a class="flex text-gray-600" href="{{ route('site.home') }}">
                <img class="w-4 mr-2" src="{{ asset('images/lock-icon.svg') }}" alt="Lock">
                <span class="font-normal">CMS</span>
            </a>
            <a class="text-gray-600" href="http://github.com/josanilton" target="_blank">
                Design by 
                <strong>Josanilton</strong>
            </a>
        </section>
    </div>
</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>