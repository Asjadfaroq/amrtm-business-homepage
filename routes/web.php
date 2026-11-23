<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->middleware('locale:ar')->name('home.ar');
Route::get('/en', HomeController::class)->middleware('locale:en')->name('home.en');
