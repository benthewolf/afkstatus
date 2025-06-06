<?php

use Illuminate\Support\Facades\Route;



Route::get('/', App\Http\Controllers\WelcomeController::class)->name('welcome');
Route::get('/v2', App\Http\Controllers\V2Controller::class)->name('v2');
