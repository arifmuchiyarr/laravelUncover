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
    return view('welcome');
});
/*
//Route::get('/mahasiswa', function () {
    return view('universitas.mahasiswa'); //universitas. menyatakan dari folder view masuk ke sub /folder universitas dilanjutkan dengan nama filenya
});
//mengirim data keview sebagai argumen
Route::get('/mahasiswa', function () {
    return view('universitas.mahasiswa',[
        "mahasiswa01" => "Risa Lestari",
        "mahasiswa02" => "Budi Gunawan"
        ]);
    });
*/
// Route::get('/mahasiswa', function () {
//     return view('universitas.mahasiswa')
//             ->with('mahasiswa01', 'Budi Gunawan')
//             ->with('mahasiswa02', 'Arlan Sumantri');
// });

// Route::get('/mahasiswa/{nama}/{umur}/{kotaAsal}', function ($nama, $umur, $kotaAsal) {
//     return view('universitas.mahasiswa')
//             ->with('nama', $nama)
//             ->with('umur', $umur)
//             ->with('kotaAsal', $kotaAsal);
// });

Route::get('/mahasiswa', function () {
    $nama ='<u>Tya Kirana Putri</u>';
    $nilai = -80;
    return view('mahasiswa',compact('nama', 'nilai'));
 });

 Route::get('/mahasiswa1', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = [80,64,30,76,95];
    return view('mahasiswa1',compact('nama','nilai'));
 });
