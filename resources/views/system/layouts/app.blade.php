@include('system.layouts.header')

<body>
    <header class="bg-dark px-3">
        <nav class="navbar navbar-dark navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('system/admin') }}">管理画面</a>
            </div>
            <a href="{{ url('/') }}" class="text-white text-nowrap bg-dark border-0">サイトを表示</a>
            @auth
                <span class="text-white p-3"> | </span>
                <form class="d-flex ml-3" action="{{ route('logout') }}" method="POST">
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
                        <li><a href="{{ url('/system/admin/parts/of/speech') }}" class="text-black"><span class="material-icons">translate</span><span class="mb-1">品詞</span></a>
                    </ul>
                    <ul>
                        <li><a href="{{ url('/system/admin/admin') }}" class="text-black"><span class="material-icons">account_circle</span><span class="mb-1">管理者</span></a>
                    </ul>
                </div>
            @endauth
            @yield('content')
        </div>
    </main>
    @include('system.layouts.footer')
