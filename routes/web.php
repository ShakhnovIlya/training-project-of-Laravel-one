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

Route::get('/todos', [\App\Http\Controllers\PagesController::class, "todos"]);
Route::get('/todos/done', [\App\Http\Controllers\PagesController::class, "todosDone"]);
Route::get('/todos/not-done', [\App\Http\Controllers\PagesController::class, "todosNotDone"]);
