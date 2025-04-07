<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

Route::get('/index', [PersonalController::class, 'index'])->name('index');

Route::get('/formulario', [PersonalController::class, 'create'])->name('create');
Route::post('/store', [PersonalController::class, 'store'])->name('store');

Route::get('/show/{personal}', [PersonalController::class,'show'])->name('show');

Route::get('/edit/{personal}', [PersonalController::class, 'edit'])->name('edit');
Route::put('/update/{personal}', [PersonalController::class, 'update'])->name('update');

Route::delete('/destroy{personal}', [PersonalController::class, 'destroy'])->name('destroy');



/*s
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
