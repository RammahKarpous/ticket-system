<?php

use App\Controllers\PagesController;
use App\Core\Route;


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

Route::dispatch();