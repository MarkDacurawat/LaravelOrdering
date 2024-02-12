<?php

use App\Http\Controllers\BurgerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/burgers', [BurgerController::class, 'index'])->name('burgers.index')->middleware('auth');
Route::get('/burgers/create', [BurgerController::class, 'create'])->name('burgers.create');
Route::post('/burgers', [BurgerController::class,'store'])->name('burgers.store');
Route::delete('/burgers/{id}', [BurgerController::class, 'destroy'])->name('burgers.destroy')->middleware('auth');;
Route::get('/burgers/{id}', [BurgerController::class,'show'])->name('burgers.show')->middleware('auth');;;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
