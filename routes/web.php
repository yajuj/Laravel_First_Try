<?php


use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', Home\IndexController::class)->name('main.index');
Route::view('/about', 'about')->name('main.about');

Route::namespace('App\Http\Controllers\Post')->prefix('posts')->middleware('auth')->group(
  function () {
    // Контроллеры в пространстве имён "App\Http\Controllers\Post"

    Route::get('/', IndexController::class)->name('posts.index');
    Route::get('/create', CreateController::class)->name('posts.create');
    Route::post('/', StoreController::class)->name('posts.store');
    Route::get('/{post}', ShowController::class)->name('posts.show')->withoutMiddleware('auth');
    Route::get('/{post}/edit', EditController::class)->name('posts.edit');
    Route::patch('/{post}', UpdateController::class)->name('posts.update');
    Route::delete('/{post}', DestroyController::class)->name('posts.destroy');
  }
);

Auth::routes();
