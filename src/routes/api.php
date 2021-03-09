<?php

use App\Http\Controllers\GamesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(array('before' => 'auth'), function() 
{
    Route::get('/games', [GamesController::class, 'getAll']);
    Route::get('/games/{id}', [GamesController::class, 'getOne']);
});

