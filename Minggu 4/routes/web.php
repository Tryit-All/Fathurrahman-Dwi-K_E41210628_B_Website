<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::prefix('/menu')->group(function () {
    // Pembuatan Group Route untuk memilah view untuk User dan Admin 

    Route::resource('/home', HomeController::class);
    // Cara mengakses bagian user yaitu : /menu/home

    Route::resource('/dashboard', DashboardController::class);
    // Cara mengakses bagian user yaitu : /menu/dashboard
});