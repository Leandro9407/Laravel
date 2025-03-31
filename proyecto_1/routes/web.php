<?php

use App\Http\Controllers\DatosController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\NoteController;

Route::get('/index',[NoteController::class,'index'])->name('index');
Route::get('/create',[NoteController::class,'create'])->name('create');
Route::get('/show{note} ',[NoteController::class,'show'])->name('show');
Route::post('/store',[NoteController::class,'store'])->name('store');
Route::get('/edit/{note}',[NoteController::class,'edit'])->name('edit');
Route::put('/update/{note}',[NoteController::class,'update'])->name('update');
Route::delete('/destroy/{note}', [NoteController::class, 'destroy'])->name('destroy');





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

/* Route::view('/index','index')->name('inicio');
Route::view('/about','about')->name('about');
Route::view('/blog','blog')->name('blog');
Route::view('/contactanos','contactanos')->name('contactanos');
 */




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
