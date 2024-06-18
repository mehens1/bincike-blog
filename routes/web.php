<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\WebisteController;
use Illuminate\Support\Facades\Artisan;


// Artisan routes
Route::get('/artisan/optimize', function () {
    Artisan::call('optimize');
    return response()->json(['message' => 'Optimization successful']);
});

// web routes
Route::get('/', [WebisteController::class, 'home'])->name('home');
Route::get('/about-us', [WebisteController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [WebisteController::class, 'contactUs'])->name('contact-us');
Route::get('/privacy-policy', [WebisteController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [WebisteController::class, 'termsCondition'])->name('terms-conditions');

Route::get('/news/{year}/{month}/{day}/{title}', [WebisteController::class, 'newsDetails'])->name('news-details');

Route::prefix('category')->group(function () {
    Route::get('/{pageName}', [WebisteController::class, 'category'])->name('category');
});
