<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ランダム出題アプリ') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header class="bg-dark px-3">
        <nav class="navbar navbar-dark navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('system/admin') }}">管理画面</a>
            </div>
            @auth
                <form class="d-flex" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-white text-nowrap bg-dark border-0">ログアウト</button>
                </form>
            @endauth
        </nav>
    </header>
    <main>
        <div class="row">
            @auth
                <div class="col-2 p-3 position-sticky bg-light">
                    <ul class="align-middle">
                        <li><a href="{{ url('/system/admin/quiz') }}" class="text-black"><span class="material-icons">contact_support</span><span class="mb-1">問題</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ url('/system/admin/admin') }}" class="text-black"><span class="material-icons">translate</span><span class="mb-1">品詞</span></a>
                    </ul>
                    <ul>
                        <li><a href="{{ url('/system/admin/admin') }}" class="text-black"><span class="material-icons">account_circle</span><span class="mb-1">管理者</span></a>
                    </ul>
                </div>
            @endauth
            @yield('content')
        </div>
    </main>

    <footer class="bg-dark py-4 text-white text-center">
        <div class="container">
            <p class="m-0">© 2022 All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.slim.min.js') }}">
    </script>
    <script src="{{ asset('js/popper.min.js') }}">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}">
    </script>
</body>

</html>
