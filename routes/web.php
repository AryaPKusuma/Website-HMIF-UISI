<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\DivisiController as Divisi;

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/divisi-ristek', [Divisi::class, 'ristek'])->name('ristek');
Route::get('/divisi-humas', [Divisi::class, 'humas'])->name('humas');
Route::get('/divisi-psdm', [Divisi::class, 'psdm'])->name('psdm');
Route::get('/divisi-kwu', [Divisi::class, 'kwu'])->name('kwu');
Route::get('/divisi-kominfo', [Divisi::class, 'kominfo'])->name('kominfo');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () {
    return view('contact'); }) ->name('contact');
