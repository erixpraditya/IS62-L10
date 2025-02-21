<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cth', function () {
    return view('contoh');
});

Route::fallback(function () {
    return view('notfound');
});

Route::get('mahasiswa/{nama}', function ($nama){
    echo "Ini Halaman Mahasiswa dengan nama $nama";
});

Route::get('/mahasiswa', function () {
    $kelas = 'IS65';
    $data = ["erix", "praditya", "rix", "Raditya", "aditya"];
    // return view('mahasiswa.index')->with('mhs', $data);
    return view('mahasiswa.index', compact('kelas','data'));
});
