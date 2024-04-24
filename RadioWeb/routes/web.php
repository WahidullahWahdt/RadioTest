<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\infoShowController;


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

Route::get('/welcome', function () {
   return view('welcome');
});


Route::resource('addBook',booksController::class);
Route::resource('addInfo',infoController::class);
Route::get('/',[infoShowController::class,'show']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('addBook',booksController::class);
    Route::resource('addInfo',infoController::class);
});

// this is my changes
Route::get('/wahid',function(){
    return "Whaiudllah";
});
  



require __DIR__.'/auth.php';

// for live streaming
Route::get('/live',function(){
    return view('audio');
});