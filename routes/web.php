<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\TournoiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('jeux', [JeuController::class, 'index']);

Route::get('joueurs', [JoueurController::class, 'index']);

Route::get('tournois', [TournoiController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jeux',JeuController::class);

Route::resource('joueurs',JoueurController::class);

Route::resource('tournois',TournoiController::class);