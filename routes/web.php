<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', [WelcomeController::class, 'index']);

Auth::routes();

Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/tourguides', [App\Http\Controllers\GuideController::class, 'index'])->name('guides');

    Route::get('/tourpackages', [App\Http\Controllers\TourPackageController::class, 'index'])->name('packages');

    Route::get('/accommodation', [App\Http\Controllers\AccommodationController::class, 'index'])->name('accommodation');
});
