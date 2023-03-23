<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


/* Implementasi Route sederahana menggunakan Method Get */

/* Syntax *//* Penjelasan */

Route::get('/', function () {
    // Saat aplikasi membuka halaman index (/) selanjutnya aplikasi
    // akan mengarahkan atau mengebalikan nilai, 
    return view('welcome');
    // disini saya mengarahkan pada file welcome.blade.php
    // cara mengarahkannya yaitu view('welcome') -> kita ambil nama depan file di atas 
});

/* Implementasi Route sederahana menggunakan Method Post */

/* Syntax *//* Penjelasan */

Route::post('/profile', function (Request $request1) {
    // Pada saat Button yang ada pada file login kita klik 
    // maka akan memproses method post di sebelah dengan
    // action = "/profile"
    return $request1->input('name');
    // lalu akan mengembalikan nilai hasil inputan yang ada pada 
    // file login.blade.php
});


/* Implementasi Route Parameter */

/* Syntax *//* Penjelasan */

Route::get(
    'user/{username}/pass/{password?}',
    // terdapat 2 parameter yang berbeda :
    // {username} dan {password?} 
    // salah satunya disertai dengan tanda tanya (?)
    // yang disertai tanda tanya (?) berguna untuk 
    // mengisi otomatis jika parameter bernilai null

    function ($username, $password = 'pasword tidak boleh kosong') {
        // terdapat 2 parameter yang salah satunya diberikan 
        // proses inisialisasi yaitu parameter
        // $password = 'pasword tidak boleh kosong'
    
        return "Username : " . $username . ", Password : " . $password;
        // lalu mengembalikan nilai string dan juga parameter
        // yang di kolaborasi 
    }
)->where('password', '[0-9]+');
// syntax di atas berguna untuk memberikan format penulisan hanya bisa menggunakan numbering 0-9 saja 


/* Implementasi Named Route */

/* Syntax *//* Penjelasan */

Route::view(
    '/login',
    'login',
    // pada saat kita ketikkan link /login maka akan diarahkan
    // ke file login.blade.php 

    ['Document' => 'Page Login']
// berikut syntax untuk mengubahan nama route
// disini saya mengubah pada bagian title 
)->name('login');


/* Implementasi Group Route */

/* Syntax *//* Penjelasan */

Route::prefix('/menu')->group(function () {
    // penggunaan group yang saya pahami seperti membungkus beberapa sub 
    // seperti pada syntax di bawah, saya memberikan sub pada Group Route
    // sub transaksi dan sub dashboard
    Route::get(
        //pemanggilan untuk sub transaksi : /menu/transaksi
        '/transaksi',
        function () {
            return 'Ini menu transaksi pada page /menu/transaksi';
        }
    );
    Route::get(
        //pemanggilan untuk sub dashboard : /menu/dashboard
        '/dashboard',
        function () {
            return 'Ini menu transaksi pada page /menu/dashboard';
        }
    );
});