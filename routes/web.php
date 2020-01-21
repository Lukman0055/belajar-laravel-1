<?php

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

Route::get('hallo', function () {
    return 'Halo ini Aplikasi Laravel Pertama Saya'.
    '<br>Laravel Is Magical Framework';
});
Route::get('about', function () {
    return '<h1>Halo</h1>'.
    'Selamat Datang di webapp saya<br>'.
    'Laravel, emang kerennn';
});
Route::get('about/profil/lukman', function () {
    return
    'Nama : Lukman<br>'.
    'Kelas : XI RPL 1';
});
Route::get('about/profil/romi', function () {
    return
    'Nama : romi<br>'.
    'Kelas : XI RPL 1';
});
Route::get('about/profil/alfi', function () {
    return
    'Nama : Alfi<br>'.
    'Kelas : XI RPL 1';
});
Route::get('about/profil/zaky', function () {
    return
    'Nama : zaky<br>'.
    'Kelas : XI MM 1';
});
Route::get('about/profil/perry', function () {
    return
    'Nama : Perry<br>'.
    'Kelas : XI TKJ 1';
});

//route parameter
Route::get('biodata/{nama}',function($a){
    return 'Halo ini biodata '.$a;
});

Route::get('autobiografi/{nama}/{alamat}/{umur}',function($a,$b,$c){
    return  'Nama : '.$a.
            '<br>Alamat : '.$b.
            '<br>Umur : '.$c.' thn';
});
