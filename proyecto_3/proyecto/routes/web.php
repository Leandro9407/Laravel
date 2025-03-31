<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectorController;
use App\Http\Controllers\LibroController;

Route::get('/indexLector', [LectorController::class, 'indexLector'])->name('indexLector');
Route::get('/createLector', [LectorController::class, 'createLector'])->name('createLector');
Route::post('/storeLector', [LectorController::class, 'storeLector'])->name('storeLector');
Route::get('/editLector/{lector}', [LectorController::class, 'editLector'])->name('editLector');
Route::put('/updateLector/{lector}', [LectorController::class, 'updateLector'])->name('updateLector');
Route::delete('/destroyLector/{lector}', [LectorController::class, 'destroyLector'])->name('destroyLector');


Route::get('/indexLibro', [LibroController::class, 'indexLibro'])->name('indexLibro');
Route::get('/createLibro', [LibroController::class, 'createLibro'])->name('createLibro');
Route::post('/storeLibro', [LibroController::class, 'storeLibro'])->name('storeLibro');
Route::get('/editLibro/{libro}', [LibroController::class, 'editLibro'])->name('editLibro');
Route::put('/updateLibro/{libro}', [LibroController::class, 'updateLibro'])->name('updateLibro');
Route::delete('/destroyLibro/{libro}', [LibroController::class, 'destroyLibro'])->name('destroyLibro');


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