<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatoController;

Route::get('/index', [DatoController::class, 'index'])->name('index');

Route::get('/create', [DatoController::class, 'create'])->name('create');
Route::post('/store', [DatoController::class, 'store'])->name('store');

Route::get('/show/{dato}', [DatoController::class, 'show'])->name('show');

Route::get('/edit/{dato}', [DatoController::class, 'edit'])->name('edit');
Route::put('/update/{dato}', [DatoController::class, 'update'])->name('update');

Route::delete('/destroy/{dato}', [DatoController::class, 'destroy'])->name('destroy');

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

/* Route::get('/', function () {
    return view('welcome');
});
 */