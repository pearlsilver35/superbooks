<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create']);
Route::post('/books', [App\Http\Controllers\BookController::class, 'store']);
Route::get('/books/{book}', [App\Http\Controllers\BookController::class, 'show']);
Route::get('/books/{book}/edit', [App\Http\Controllers\BookController::class, 'edit']);
Route::patch('/books/{book}', [App\Http\Controllers\BookController::class, 'update']);
Route::get('/books/{book}/archive', [App\Http\Controllers\BookController::class, 'destroy']);
Route::get('/books/{book}/delete', [App\Http\Controllers\BookController::class, 'destroy']);
//Route::delete('/books/{book}', [App\Http\Controllers\BookController::class, 'destroy']);