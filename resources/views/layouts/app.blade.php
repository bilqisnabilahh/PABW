<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laporan Banjir')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="site-nav">
        <a class="brand" href="{{ route('laporan.form') }}"><span class="brand-mark">A</span> Awas Banjir</a>
        <div class="nav-links">
        @guest
            <a href="{{ route('login') }}">Masuk</a>
            <a class="nav-cta" href="{{ route('register') }}">Daftar petugas</a>
        @endguest

        @auth
            <a href="{{ route('laporan.index') }}">Daftar laporan</a>
            <a href="{{ route('profil') }}">Profil petugas</a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button class="nav-button" type="submit">Keluar</button>
            </form>
        @endauth
        </div>
    </nav>

    <main class="page-shell">
        @yield('content')
    </main>
</body>
</html>
