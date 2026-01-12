<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListGamesController;
use App\Http\Controllers\LoginController;


Route::get('/', action: [HomeController::class, 'index']) -> name('home.index');
Route::get('/listGames', action: [ListGamesController::class, 'index']) -> name('listGames.index');
Route::get('/login', action: [LoginController::class, 'index']) -> name('login.index');

?>