@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1>Alunan Harmoni Gamelan</h1>
    <p>Ansambel musik tradisional Jawa yang memadukan keindahan ritme, melodi, dan spiritualitas.</p>
</div>

<div class="grid">
    <div class="glass-card">
        <div class="card-img" style="background: url('https://images.unsplash.com/photo-1628148810757-36e32d398d5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;"></div>
        <h3>Kendhang</h3>
        <p>Instrumen pengatur irama utama dalam gamelan Jawa. Dimainkan dengan cara ditepuk menggunakan telapak tangan.</p>
        <button class="play-audio-btn" data-instrument="kendhang">▶ Dengarkan Suara</button>
    </div>

    <div class="glass-card">
        <div class="card-img" style="background: url('https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;"></div>
        <h3>Bonang</h3>
        <p>Instrumen melodi yang terdiri dari deretan gong kecil berbentuk periuk yang diletakkan secara horizontal. Memiliki peran penting dalam menuntun melodi lagu.</p>
        <button class="play-audio-btn" data-instrument="bonang">▶ Dengarkan Suara</button>
    </div>

    <div class="glass-card">
        <div class="card-img" style="background: url('https://images.unsplash.com/photo-1460036521480-aeb29173247b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;"></div>
        <h3>Gong</h3>
        <p>Pusat dari ansambel gamelan. Bunyi gong yang besar dan bergema menjadi penanda akhir dari sebuah siklus gending (lagu).</p>
        <button class="play-audio-btn" data-instrument="gong">▶ Dengarkan Suara</button>
    </div>
</div>
@endsection
