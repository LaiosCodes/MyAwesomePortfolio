<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::livewire('/', 'pages::index')->name('home');
// Route::get('/', [MainController::class, 'index'])->name('home');
