<?php

use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
