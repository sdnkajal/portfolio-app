<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/resume', [PortfolioController::class, 'resume'])->name('resume');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'store'])->name('contact.store');
