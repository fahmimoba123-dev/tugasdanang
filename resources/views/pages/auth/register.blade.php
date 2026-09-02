@extends('layouts.auth')

@section('title', 'Daftar')

@section('content')
<div class="auth-container fade-up-element visible">
    <div class="glass-card">
        <div class="page-header">
            <h2>Daftar Akun Baru</h2>
            <p>Bergabunglah dengan keluarga Nusantara Heritage</p>
        </div>

        <form action="{{ route('register.process') }}" method="POST" class="auth-form">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control" required placeholder="Masukkan nama Anda" value="{{ old('name') }}">
                @error('name')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required placeholder="Masukkan email aktif" value="{{ old('email') }}">
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="Minimal 8 karakter">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required placeholder="Ulangi password">
            </div>

            <button type="submit" class="btn btn-block">Daftar Sekarang</button>
        </form>

        <div class="auth-link">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
        </div>
    </div>
</div>
@endsection
