<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\ProductsController;
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

Route::get('/', [ProductsController::class, 'index']);
Route::get('/adicionar', [ProductsController::class, 'adicionar']);
Route::get('/fone', [ProductsController::class, 'fone']);
Route::get('/mouse', [ProductsController::class, 'mouse']);
Route::get('/login', [ProductsController::class, 'login']);
Route::get('/teclado', [ProductsController::class, 'teclado']);
Route::get('/gabin', [ProductsController::class, 'gabin']);
