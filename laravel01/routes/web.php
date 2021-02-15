<?php

use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('mahasiswa/fasilkom/anto', function () {
    return '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
 });

Route::get('mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
 });



// Route::get('', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    $hello= ["Hello Arif", 2=>["hello jakarta", "hello medan"]];
    //var_dump($hello);
    dd($hello); // ini adalah fungsi dump and die
    return $hello;
});

// Route::get('/belajar', function () {
//     echo "<h1>Hallo Arif</h1>";
//     echo "<p>Kita sedang belajar Laravel</p>";
// });

// Route::get('/belajar/laravel/ok', function () {
//     echo "<h2 style='text-align:center'>Welcome</h2>";
// });

// Route::get('/belajar/{nama}', function ($nama) {
//     return "Nama Saya adalah $nama";
// });

// Route::get('/stok_barang/{nama}/{brand}', function ($nama, $brand) {
//     return "Nama Produk <b>$nama</b> dan brand <u>$brand</u>";
// });

// Route::get('/produk/{tipe}/{merek}', function ($a, $b) { // ini contoh harus 2 nilai terpenuhi
//     return "Nama Produk <b>$a</b> dan brand <u>$b</u>";
// });

// Route::get('/phone/{hape?}/{tipe?}', function ($i="Android", $j="Iphone") { // ini contoh input salah satu nilai terpenuhi
//     return "Nama Prosduk $i adalah $j";
// });

// //route dengan syarat hanya bisa di isi dengan minimal 1 angka
// Route::get('/user/{id?}', function ($id=69) {
//     return "tampilkan user dengan ID = $id";
// })->where('id', '[0-9]+'); // syarat isian minimal 1 angka dan bukan huruf

// Route::get('/user1/{id?}', function ($id="AA12") {
//     return "tampilkan user dengan ID = $id";
// })->where('id', '[A-Z]{2}[0-9]+'); // syarat isian 2 Huruf kapital dan minimal 1 angka

// //Contoh Route redirect
// Route::get('/contact-us', function () {
//     return "<h1>Hubungi Kami</h1>";
// });

// Route::redirect('/hubungi-kami', 'contact-us', 301);

// //contoh route group dengan tambahan method Route::prefix()
// Route::prefix('/admin')->group(function(){
//     Route::get('/mahasiswa', function () {
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });
//     Route::get('/dosen', function () {
//         echo "<h1>Daftar Dosen</h1>";
//     });
//     Route::get('/karyawan', function () {
//         echo "<h1>Daftar Karyawan</h1>";
//     });
// });

// //Route::fallback digunakan untuk menimpa tampilan default 404|not found
// Route::fallback(function(){
//     return "<h1 style='text-align:center'>Halaman Tidak di Temukan</h1>";
// });

