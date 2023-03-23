<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUsers;

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

//'/ControllerHome' sebagai url untuk mengakses controller managementUsers dengan method 'regiter'
Route::get('/ControllerHome', [ManagementUsers::class, 'register']);

//'/ControllerLanding' sebagai url untuk mengakses controller managementUsers dengan method 'landing' 
Route::get('/ControllerLanding', [ManagementUsers::class, 'index']);