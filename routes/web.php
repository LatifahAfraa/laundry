<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KainMasukController;
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
Route::middleware(["auth"])->group(function(){
    Route::get('/', function () {
        return view('layouts/base');
    });

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('KainMasuk', KainMasukController::class);

});


Auth::routes();

Route::get("logout", [LoginController::class, "logout"])->name('logout.get');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
