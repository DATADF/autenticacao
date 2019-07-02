<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Autenticação')</title>
</head>
<body>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            color: black;
            list-style: none;
        }
        .active a {
            color: orangered;
        }

        .container {
            width: 90%;
            max-width: 992px;
            margin: 0 auto;
        }

    </style>

    <div class="container">

        @include('partials.nav')

        @yield('content')
    </div>


</body>
</html>
