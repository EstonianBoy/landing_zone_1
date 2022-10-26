<?php

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
    return view('home');
});

Auth::routes();

Route::get('/register', [App\Http\Controllers\HomeController::class, 'register_form'])->name('register_form');
Route::get('/Thats_all', [App\Http\Controllers\HomeController::class, 'Thats_all'])->name('Thats_all');
