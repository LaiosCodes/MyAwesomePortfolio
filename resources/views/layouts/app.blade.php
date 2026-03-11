<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/27f0ee9e52.js" crossorigin="anonymous"></script>
        <link rel="icon" href="{{ $favicon ?? asset('me-favicon.png') }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ $favicon ?? asset('me-favicon.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.5.1/github-markdown.min.css">

        <title>{{ $title ?? config('app.name') }}</title>

        <style>
            td, tr { 
                background-color: transparent !important;
                border: 0 !important;
                color: var(--foreground) !important;
            }
            table {
                border: 0 !important;
            }
        </style>


        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/terminal_dark.css') }}" id="mainTheme" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="flash-messages-container"></div>
        <main style="max-width: 100%; width: 512px; margin: 0 auto; margin-top: 5rem;">
            <div class="d-flex justify-content-between align-items-center mb-3 border-bottom">
                <ul class="nav nav-tabs m-0 p-0">   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">{{ strtolower($pageTitle ?? 'portfolio') }}.html <i class="fa-solid fa-close"></i></a>
                    </li>
                    @if (isset($pageTitle) && $pageTitle !== 'portfolio')
                    <li class="nav-item">
                        <a class="nav-link" href="/">portfolio.html</a>
                    </li>
                    @endif
                </ul>
                <a id="themeIcon" onclick="setTheme()"><i class="fa-solid fa-sun"></i></a>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        ~/{{ strtolower($pageTitle ?? '') }}
                    </div>
                    <div class="col-auto">
                        <div class="d-inline-block">
                            <a href="/blog" title="blog">Blog</a>
                            |
                            <a href="#"><i class="fa-brands fa-github"></i></a>
                            |
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            |
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>

                        </div>
                    </div>
                </div>
                {{ $slot }}
            </div>
        </main>

        @livewireScripts
        <script src="https://code.jquery.com/jquery-4.0.0.js"></script>
        <script>
            window.appUrl = '{{ config("app.url") }}';
            function showFlashMessage(message, type = 'success', duration = 3000) {
                const container = document.getElementById('flash-messages-container');
                const messageElement = document.createElement('div');
                
                messageElement.classList.add('flash-message', type);
                messageElement.textContent = message;

                container.appendChild(messageElement);

                setTimeout(() => {
                    messageElement.classList.add('hide');
                    setTimeout(() => {
                        container.removeChild(messageElement);
                    }, 500); 
                }, duration);
            }
            @if (session()->has('message'))
                showFlashMessage("{{ session('message') }}", "{{ session('type', 'success') }}");
            @endif
        </script>
        <script src="{{ asset('js/theme_base.js') }}"></script>
    </body>
</html>
