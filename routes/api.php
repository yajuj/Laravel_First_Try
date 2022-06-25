<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return 'fdsa';
});

Route::namespace('Post\Api')->prefix('posts')->middleware('auth:sanctum')->group(
  function () {
    // Контроллеры в пространстве имён "App\Http\Controllers\Post"
    Route::get('/', IndexController::class)->withoutMiddleware('auth:sanctum');
    Route::post('/', StoreController::class);
    Route::get('/{post}', ShowController::class)->withoutMiddleware('auth:sanctum');
    Route::patch('/{post}', UpdateController::class);
    Route::delete('/{post}', DestroyController::class);
  }
);
