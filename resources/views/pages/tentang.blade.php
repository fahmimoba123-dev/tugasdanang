@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1>Tentang Kami</h1>
    <p>Kami hadir dengan misi untuk merawat dan melestarikan kekayaan budaya Nusantara di era digital.</p>
</div>

<div class="glass-card" style="max-width: 800px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Visi & Misi</h2>
    <p style="font-size: 1.1rem; color: var(--text-muted); margin-bottom: 2rem;">
        Seiring dengan perkembangan teknologi, banyak nilai-nilai luhur dan seni budaya yang mulai terlupakan oleh generasi muda. Kami membangun platform ini sebagai jembatan yang menghubungkan masa lalu dengan masa depan, memastikan bahwa keindahan Bahasa, Gamelan, dan Wayang tetap hidup di hati masyarakat.
    </p>

    <div style="display: flex; justify-content: center; gap: 1rem; margin-top: 3rem;">
        <a href="#" class="btn">Hubungi Kami</a>
        <a href="{{ route('home') }}" class="btn" style="border-color: rgba(255,255,255,0.2); color: #fff;">Kembali ke Beranda</a>
    </div>
</div>
@endsection
