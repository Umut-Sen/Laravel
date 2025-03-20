<?php

use Illuminate\Support\Facades\Route;

Route::get('/planeten', function () {
    return view('planeten');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
