<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route untuk ke Halaman Utama */
Route::get('/', function () {
    return view('halamanUtama/index');
})->name('index');

/*Route untuk ke Halaman Service */
Route::get('/services', function () {
    return view('halamanService/services');
})->name('services');

/*Route untuk ke Halaman About */
Route::get('/about', function () {
    return view('halamanAbout/about');
})->name('about');

/*Route untuk ke Halaman Contact */
Route::get('/contact', function () {
    return view('halamanContact/contact');
})->name('contact');
