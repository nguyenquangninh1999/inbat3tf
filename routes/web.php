<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/san-pham/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
