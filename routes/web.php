<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::index')->name('home');
Route::livewire('/blog', 'pages::blog')->name('blog');

Route::group(['middleware' => 'protected_access:read'], function () {
    Route::livewire('/admin', 'pages::admin.index')->name('admin');
});