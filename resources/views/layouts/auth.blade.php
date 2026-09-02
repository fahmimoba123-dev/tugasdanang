<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Nusantara Heritage</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth-layout.css') }}">
</head>
<body>
    <div class="auth-layout">
        <div class="auth-banner">
            <div class="banner-content">
                <h1>NUSANTARA.</h1>
                <p>Jelajahi, Pelajari, dan Lestarikan Warisan Budaya Indonesia.</p>
                <div class="banner-features">
                    <div class="feature-item">
                        <span style="font-size: 1.5rem;">✨</span>
                        <p><strong>Akses Eksklusif</strong><br>Nikmati konten budaya premium tanpa batas.</p>
                    </div>
                    <div class="feature-item">
                        <span style="font-size: 1.5rem;">📚</span>
                        <p><strong>Koleksi Lengkap</strong><br>Pelajari Bahasa, Gamelan, dan Wayang.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-form-wrapper">
            @yield('content')
        </div>
    </div>
</body>
</html>
