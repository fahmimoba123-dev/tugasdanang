<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara Heritage</title>
    <meta name="description" content="Website pelestarian budaya menampilkan informasi Bahasa, Gamelan, dan Wayang">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
</head>
<body>
    <div class="bg-glow"></div>
    @if(request()->routeIs('gamelan'))
        <div class="page-bg" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background-image: url('{{ asset('images/bg_gamelan.jpg') }}'); background-size: cover; background-position: center; opacity: 0.45; filter: brightness(0.7); pointer-events: none;"></div>
    @elseif(request()->routeIs('wayang'))
        <div class="page-bg" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background-image: url('{{ asset('images/bg_wayang.jpg') }}'); background-size: cover; background-position: center; opacity: 0.45; filter: brightness(0.7); pointer-events: none;"></div>
    @elseif(request()->routeIs('tentang') || request()->routeIs('home') || request()->requestUri === '/')
        <div class="page-bg" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background-image: url('{{ asset('images/bg_batik.jpg') }}'); background-size: cover; background-position: center; opacity: 0.4; filter: brightness(0.6); pointer-events: none;"></div>
    @elseif(request()->routeIs('bahasa'))
        <div class="page-bg" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background-image: url('{{ asset('images/bg_numbers.jpg') }}'); background-size: cover; background-position: center; opacity: 0.45; filter: brightness(0.7); pointer-events: none;"></div>
    @endif

    <nav class="navbar">
        <a href="{{ route('home') }}" class="logo">NUSANTARA.</a>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ request()->requestUri === '/' ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('bahasa') }}" class="{{ request()->routeIs('bahasa') ? 'active' : '' }}">Bahasa</a></li>
            <li><a href="{{ route('gamelan') }}" class="{{ request()->routeIs('gamelan') ? 'active' : '' }}">Gamelan</a></li>
            <li><a href="{{ route('wayang') }}" class="{{ request()->routeIs('wayang') ? 'active' : '' }}">Wayang</a></li>
            <li><a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang Kami</a></li>
        </ul>

        <div class="nav-auth" style="margin-left: 1.5rem;">
            @auth
                <div class="profile-pill" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.4rem 1.2rem 0.4rem 0.4rem; background: rgba(212, 175, 55, 0.15); border: 2px solid #d4af37; border-radius: 50px; cursor: pointer; box-shadow: 0 0 15px rgba(212, 175, 55, 0.3);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Klik untuk Logout">
                    <div class="profile-initial" style="width: 34px; height: 34px; min-width: 34px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #d4af37, #f9e596); color: #0f1115; border-radius: 50%; font-weight: 700; font-size: 1rem;">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                    <span class="profile-name" style="font-weight: 600; font-size: 0.9rem; color: #ffffff; white-space: nowrap; letter-spacing: 0.5px;">{{ Auth::user()->name }}</span>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-login-pill">Masuk</a>
                <a href="{{ route('register') }}" class="btn-register-pill">Daftar</a>
            @endauth
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Nusantara Heritage. Melestarikan Budaya Bangsa.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
