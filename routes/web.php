<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home.home');
Route::get('/home-en', [HomeController::class, 'homeEn'])->name('home.homeEn');
Route::get('/galeri', [HomeController::class, 'gallery'])->name('home.gallery');
Route::get('/gallery', [HomeController::class, 'galleryEn'])->name('home.galleryEn');
Route::get('/tentang', [HomeController::class, 'about'])->name('home.about');
Route::get('/aboutus', [HomeController::class, 'aboutEn'])->name('home.aboutEn');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/faq-en', [HomeController::class, 'faqEn'])->name('home.faqEn');
