    <?php

use App\Http\Controllers\PCController;
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

    Route::get('/', [PCController::class, 'index'])->name('index');
    Route::get('/adicionar', [PCController::class, 'adicionar'])->name('adicionar');
    Route::get('/fone', [PCController::class, 'fone'])->name('fone');
    Route::get('/mouse', [PCController::class, 'mouse'])->name('mouse');
    Route::get('/login', [PCController::class, 'login'])->name('login');
    Route::get('/teclado', [PCController::class, 'teclado'])->name('teclado');
    Route::get('/gabin', [PCController::class, 'gabin'])->name('gabin');
