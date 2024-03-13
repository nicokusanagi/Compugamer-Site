<?php

use Illuminate\Support\Facades\Route;
use app\Controllers\ProdController;
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

Route::get('/login', [ProdController::class, 'login']);
Route::get('/adicionar', [ProdController::class, 'adicionar']);
