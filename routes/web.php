<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\DivisiController as Divisi;

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/divisi', [Divisi::class, 'index'])->name('divisi');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () {
    return view('contact'); }) ->name('contact');
