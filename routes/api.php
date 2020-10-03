<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RandomNumberController;

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

Route::prefix('random-number')->group(function () {
    Route::get('/generate', [RandomNumberController::class, 'create']);
    Route::get('/retrieve/{obRandomNumber}', [RandomNumberController::class, 'get']);
});
