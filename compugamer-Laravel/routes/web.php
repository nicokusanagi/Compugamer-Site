<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [ProductsController::class, 'index'])->name('index');
Route::get('/adicionar', [ProductsController::class, 'adicionar'])->name('adicionar');
Route::get('/fone', [ProductsController::class, 'fone'])->name('fone');
Route::get('/mouse', [ProductsController::class, 'mouse'])->name('mouse');
Route::get('/login', [ProductsController::class, 'login'])->name('login');
Route::get('/teclado', [ProductsController::class, 'teclado'])->name('teclado');
Route::get('/gabin', [ProductsController::class, 'gabin'])->name('gabin');
