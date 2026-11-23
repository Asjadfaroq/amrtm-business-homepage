<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->middleware('locale:ar')->name('home.ar');
Route::get('/en', HomeController::class)->middleware('locale:en')->name('home.en');

Route::get('/{page}', PageController::class)
    ->whereIn('page', config('platform.pages'))
    ->middleware('locale:ar')
    ->name('page.ar');

Route::get('/en/{page}', PageController::class)
    ->whereIn('page', config('platform.pages'))
    ->middleware('locale:en')
    ->name('page.en');
