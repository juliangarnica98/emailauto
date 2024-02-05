<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LILIEMAIL') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <!-- Styles -->
    <style>
        .bg-img {
            background-image: url("img/fondo.jpg");
            min-height: 100%;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .btn-lili{
            background-color: #6610f2;
            color: #fff;
        }
        .btn-lili:hover{
            background-color: #d63384;
            color: #fff;
        }
        .bg-form{
            background: rgb(214,51,132);
            background: linear-gradient(291deg, rgba(214,51,132,1) 0%, rgba(102,16,242,1) 78%);
        }
        .form-control{
            /* border-top: 0;
            border-right: 0;
            border-left: 0;
            border-bottom: #d63384 2px solid; */
            border: #d63384 2px solid;
            border-radius: 12px;
            background-color: #fff;
            outline: none;
        }
        .form-control:focus{
            border-color: #6610f2;
            outline: none;
        }
        .btn{
            border-radius: 12px;
        }

    </style>
</head>
<body>
    <div id="app" class="bg-img">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
