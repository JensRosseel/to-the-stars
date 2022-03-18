<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/planet', [MainController::class, 'planet'])->name('planet');
