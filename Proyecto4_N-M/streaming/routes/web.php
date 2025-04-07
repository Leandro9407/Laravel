<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

Route::prefix("clientes")->group(function () {
    Route::get('/index', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/show/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/edit/{cliente}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/put/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/destroy/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

}); 

Route::prefix("servicios")->group(function () {
    Route::get('/index', [ServicioController::class, 'index'])->name('servicios.index');
    Route::get('/create', [ServicioController::class, 'create'])->name('servicios.create');
    Route::post('/store', [ServicioController::class, 'store'])->name('servicios.store');
    Route::get('/show/{servicio}', [ServicioController::class, 'show'])->name('servicios.show');
    Route::get('/edit/{servicio}', [ServicioController::class, 'edit'])->name('servicios.edit');
    Route::put('/put/{servicio}', [ServicioController::class, 'update'])->name('servicios.update');
    Route::delete('/destroy/{servicio}', [ServicioController::class, 'destroy'])->name('servicios.destroy');

});    



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
}); */
