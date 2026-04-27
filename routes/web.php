<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/san-pham/{id}', [ProductController::class, 'show'])->name('product.show');
