<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.home');
    })->name('home');

    Route::get('/bahasa', function () {
        return view('pages.bahasa');
    })->name('bahasa');

    Route::get('/gamelan', function () {
        return view('pages.gamelan');
    })->name('gamelan');

    Route::get('/wayang', function () {
        return view('pages.wayang');
    })->name('wayang');

    Route::get('/tentang-kami', function () {
        return view('pages.tentang');
    })->name('tentang');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('pages.auth.login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');

    Route::get('/register', function () {
        return view('pages.auth.register');
    })->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
