<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])
    ->name('index');
Route::get('/post/create', [IndexController::class, 'create'])
    ->name("post.create");
Route::post('/post/create', [IndexController::class, 'store'])
    ->name('post.store');
Route::get('/post/{id}', [IndexController::class, 'show'])
    ->name('show')
    ->whereNumber('id');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
