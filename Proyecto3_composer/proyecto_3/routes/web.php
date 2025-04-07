<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/index', [ProductoController::class, 'index'])->name('index');
Route::get('/create', [ProductoController::class, 'create'])->name('create');
Route::post('/store', [ProductoController::class, 'store'])->name('store');
Route::get('/show/{producto}', [ProductoController::class, 'show'])->name('show');
Route::get('/edit/{producto}', [ProductoController::class, 'edit'])->name('edit');
Route::put('/update/{producto}', [ProductoController::class, 'update'])->name('update');
Route::delete('/destroy/{producto}', [ProductoController::class,'destroy'])->name('destroy');

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