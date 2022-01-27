@include('system.layouts.header')

<body>
    <header class="bg-dark px-3">
        <nav class="navbar navbar-dark navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ Route('home') }}">ランダム出題アプリ</a>
            </div>
        </nav>
    </header>
    <main class="container ">
        @yield('content')
    </main>
    @include('system.layouts.footer')
