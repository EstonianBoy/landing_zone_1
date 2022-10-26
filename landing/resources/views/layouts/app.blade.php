<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Почта России</title>

    <!-- Fonts -->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

    <div class="navbar fixed-top navbar-expand-lg bg-white">
        <div class="container">
            <div class="navbar-header" >
                <a class="navbar-brand ms-auto" style="width: 500px" href="/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Russian_Post_logo.png" class="img-fluid" width="100" alt="Почта россии">
                </a>
            </div>

            <div class="navbar-collapse collapse" id="#scroll">
                <ul class="navbar-nav ms-auto" style="width: 500px">
                    <li class="nav-item">
                        <a class="nav-link active" href="#list-item-1">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#list-item-2">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#list-item-3">Работа с нами</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#list-item-4">Регистрация</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
