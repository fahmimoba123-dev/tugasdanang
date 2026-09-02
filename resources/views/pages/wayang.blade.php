@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1>Kisah Epik Pewayangan</h1>
    <p>Pertunjukan bayangan yang sarat akan makna filosofis dan pesan moral kehidupan manusia.</p>
</div>

<div class="grid">
    <div class="glass-card wayang-card">
        <div class="card-img" style="background: url('https://images.unsplash.com/photo-1590483864273-097561be61c9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;"></div>
        <h3>Arjuna</h3>
        <p>Kesatria Pandawa yang dikenal karena ketampanan, kelembutan, namun sangat tangguh dalam berperang dan memanah.</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Wayang_Kulit_of_Arjuna.png/800px-Wayang_Kulit_of_Arjuna.png" alt="Arjuna" class="wayang-figure">
    </div>

    <div class="glass-card wayang-card">
        <div class="card-img" style="background: url('https://images.unsplash.com/photo-1627914619477-8d9980d0d880?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;"></div>
        <h3>Bima (Werkudara)</h3>
        <p>Pandawa nomor dua yang memiliki perawakan besar, gagah, tegas, jujur, dan tidak pernah berbahasa krama kepada siapapun.</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Wayang_Kulit_of_Bima.png/800px-Wayang_Kulit_of_Bima.png" alt="Bima" class="wayang-figure">
    </div>

    <div class="glass-card wayang-card">
        <div class="card-img" style="background: url('https://images.unsplash.com/photo-1555581971-7009418beeb7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;"></div>
        <h3>Punokawan</h3>
        <p>Terdiri dari Semar, Gareng, Petruk, dan Bagong. Pamomong para kesatria yang bijaksana dan sering melontarkan humor bermakna.</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Wayang_Kulit_of_Semar.png/800px-Wayang_Kulit_of_Semar.png" alt="Semar" class="wayang-figure">
    </div>
</div>
@endsection
