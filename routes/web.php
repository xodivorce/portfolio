<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cv', [PdfController::class, 'view'])->name('cv');

Route::get('/resume', [HomeController::class, 'resume'])->name('resume');

Route::get('/projects', [HomeController::class, 'projects'])->name('projects');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
