<?php

use App\Http\Controllers\ServicesController;
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

/**
 * Health check
 *
 * Check if the API is still alive.
 *
 * PS. This is a Closure route. 😄
 */
Route::get('/healthcheck', function () {
    return "Hi!! 👋";
});

/** @var Route Route */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/badwords', 'BadWordController');

Route::post('/services/highlightBadWordsInText', [ServicesController::class, 'highlightBadWordsInText']);

Route::post('/services/censorTexts/{mode?}', [ServicesController::class, 'censorTexts']);

Route::post('/services/censorImage', [ServicesController::class, 'censorImage']);

Route::get('/services/getTopBadWords', [ServicesController::class, 'getTopBadWords']);

Route::get('/services/getBadWordStats', [ServicesController::class, 'getBadWordStats']);
