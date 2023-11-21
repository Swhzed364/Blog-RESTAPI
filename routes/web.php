<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/post', 'namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/', IndexController::class)->name('post.index');
    //Route::get('/create', CreateController::class)->name('post.create');
    Route::post('/', StoreController::class)->name('post.store');
    Route::get('/{post}', ShowController::class)->name('post.show');
    //Route::get('/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/{post}', UpdateController::class)->name('post.update');
    Route::delete('/{post}/delete', DestroyController::class)->name('post.destroy');
});

Route::patch('/like/{post}/{user}', App\Http\Controllers\Like\StoreController::class)->name('like.store');

Route::group(['prefix' => '/comment', 'namespace' => 'App\Http\Controllers\Comment'], function () {
    Route::post('/', StoreController::class)->name('comment.store');
});
