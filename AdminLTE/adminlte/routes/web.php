<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Models\Category;

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

Route::get('/', function () {
    return view('welcome');
});

/* Auth::routes(); */
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('posts')->name('posts.')->group(function(){
    Route::get('/index', [PostController::class, 'index'])->name('index');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
    Route::put('/update/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/destroy/{post}', [PostController::class, 'destroy'])->name('destroy');

});

Route::prefix('categorias')->name('categorias.')->group(function(){
    Route::get('/index', [CategoryController::class, 'index'])->name('index');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{categorias}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{categorias}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/destroy/{categorias}', [CategoryController::class, 'destroy'])->name('destroy');

});

Route::prefix('etiquetas')->name('etiquetas.')->group(function(){
    Route::get('/index', [TagController::class, 'index'])->name('index');
    Route::post('/store', [TagController::class, 'store'])->name('store');
    Route::get('/edit/{tags}', [TagController::class, 'edit'])->name('edit');
    Route::put('/update/{tags}', [TagController::class, 'update'])->name('update');
    Route::delete('/destroy/{tags}', [TagController::class, 'destroy'])->name('destroy');

});