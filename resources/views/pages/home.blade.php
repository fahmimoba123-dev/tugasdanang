@extends('layouts.app')

@section('content')
<section class="hero">
    <h1>Kenali & Lestarikan<br>Budaya Nusantara</h1>
    <p>Jelajahi keindahan kekayaan budaya Indonesia. Dari keanggunan Gamelan, kebijaksanaan dalam cerita Wayang, hingga keberagaman Bahasa daerah yang menjadi identitas bangsa.</p>
    <a href="{{ route('gamelan') }}" class="btn">Mulai Eksplorasi</a>
</section>

<section class="grid" style="margin-top: -50px; padding: 0 5%; position: relative; z-index: 10;">
    <div class="glass-card">
        <h3>Bahasa</h3>
        <p>Pelajari berbagai ragam bahasa daerah, sejarah aksara, serta filosofi komunikasi masyarakat Nusantara masa lampau dan masa kini.</p>
        <br>
        <a href="{{ route('bahasa') }}" style="color: var(--accent); font-weight: bold;">Selengkapnya &rarr;</a>
    </div>
    
    <div class="glass-card">
        <h3>Gamelan</h3>
        <p>Eksplorasi setiap instrumen yang merangkai harmoni dalam seni karawitan, menciptakan lantunan nada yang menenangkan jiwa.</p>
        <br>
        <a href="{{ route('gamelan') }}" style="color: var(--accent); font-weight: bold;">Selengkapnya &rarr;</a>
    </div>
    
    <div class="glass-card">
        <h3>Wayang</h3>
        <p>Mengenal tokoh-tokoh pewayangan yang epik, membawa pesan moral mendalam dari kisah Mahabharata dan Ramayana.</p>
        <br>
        <a href="{{ route('wayang') }}" style="color: var(--accent); font-weight: bold;">Selengkapnya &rarr;</a>
    </div>
</section>
@endsection
