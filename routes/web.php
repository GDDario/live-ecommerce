<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home-page')->name('home');
Route::view('head', 'pages.head-page')->name('head');
Route::view('torso', 'pages.home-page')->name('torso');
Route::view('legs', 'pages.home-page')->name('legs');
Route::view('feet', 'pages.home-page')->name('feet');
Route::view('product/{slug}', 'pages.product')->name('product');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
