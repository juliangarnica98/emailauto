<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <style>
        body {
            background-color: #e9ddfc
        }

        .nav-link {
            color: #000;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #6610f2;
        }

        .navbar-brand {
            color: #d63384;
        }

        .navbar-brand:hover {
            color: #6610f2;
        }

        .dropdown-item {
            color: #d63384;
        }

        .dropdown-item:hover {
            color: #6610f2;
        }

        .active {
            background-color: #d63384;
            border-radius: 25px;
        }

        .active>.nav-link {
            color: #fff;
        }

        .card-header {
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            color: #d63384;
            background-color: #fff;
        }

        table {
            text-align: center;

        }

        .card {
            background-color: #fff;
        }

        thead {
            border-top: #d63384 2px solid;
            border-bottom: #d63384 2px solid;
        }

        tbody {
            border-bottom: #6610f2 2px solid;
        }

        /*EStilo de input file*/
        .container-input {
            text-align: center;
            padding: 15px 0;
            border-radius: 6px;
            width: 100%;
            margin: 0 auto;
        }

        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile+label {
            max-width: 80%;
            font-size: 1.25rem;
            font-weight: 700;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            padding: 0.625rem 1.25rem;
        }

        .inputfile+label svg {
            width: 1em;
            height: 1em;
            vertical-align: middle;
            fill: currentColor;
            margin-top: -0.25em;
            margin-right: 0.25em;
        }

        .iborrainputfile {
            font-size: 18px;
            font-weight: bold;
        }

        /* style 1 */

        .inputfile-1+label {
            color: #fff;
            background-color: #6610f2;
        }

        .inputfile-1:focus+label,
        .inputfile-1.has-focus+label,
        .inputfile-1+label:hover {
            background-color: #d63384;
        }
        /*EStilo de btn*/
        .btn{
            
            background-color: #d63384;
            color: #fff;
            border-radius: 0;
    
        }
        .btn:hover{
            background-color: #6610f2;
            color: #fff;
        }

        /*Estilos de pagicaion*/
        .pagination li {
            margin-left: .25rem;
            margin-right: .25rem;
        }

        .pagination li .page-link {
            border-radius: .25rem;
            border: none;
            min-width: 2.25rem;
            text-align: center;
            color: #4f5464;
        }

        .pagination li.active .page-link,
        .pagination li .page-link:hover {
            background-color: #6610f2;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong><i> {{ config('app.name', 'Laravel') }}</i></strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                            <a class="nav-link " href="{{ route('home') }}">{{ __('Aniversarios') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('birthday') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('birthday') }}">{{ __('Cumpleaños') }}</a>
                        </li>
                        <li class="nav-item {{ Route::is('plantilla') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('plantilla') }}">{{ __('Plantillas') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        'use strict';

        ;
        (function(document, window, index) {
            var inputs = document.querySelectorAll('.inputfile');
            Array.prototype.forEach.call(inputs, function(input) {
                var label = input.nextElementSibling,
                    labelVal = label.innerHTML;

                input.addEventListener('change', function(e) {
                    var fileName = '';
                    if (this.files && this.files.length > 1)
                        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}',
                            this.files.length);
                    else
                        fileName = e.target.value.split('\\').pop();

                    if (fileName)
                        label.querySelector('span').innerHTML = fileName;
                    else
                        label.innerHTML = labelVal;
                });
            });
        }(document, window, 0));
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
</body>

</html>
