<?php

use App\Controllers\PagesController;
use Core\Route;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

Route::dispatch();