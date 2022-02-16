<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballController;
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

Route::get('/game-result2', function () {
    return null;
});

Route::get('/', [FootballController::class, 'index']);
Route::get('/game-result', [FootballController::class, 'index']);
Route::get('/playbutton', [FootballController::class, 'playbutton']);

//Route::get('/game-result', function () {
//    return view('welcome');
//});