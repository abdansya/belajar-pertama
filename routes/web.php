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

Route::get('/', function () {
    return view('welcome');
});

Route::any('kontak', function(){
  $html = '<h1>Halaman Kontak</h1>';
  $html = $html.'<p>Anda mengakses dengan method '.Request::method().'</p>';
  if (Request::isMethod('delete')) {
    $html = $html."Anda menghapus pesan";
  }
  return $html;
});

Route::post('kotak-post', function(){
  return "Anda mengirim pesan \"".$_POST['pesan']."\"";
});

Route::pattern('nama','[A-Za-z]+');
Route::get('selamat-datang/{nama?}',function($nama = 'Guest'){
  $html = 'Selamat datang '.$nama.' Anda luar biasa hebat Allahuakbar';
  return $html.'<br> <a href="'.route('home.welcome').'">Pergi ge halaman welcome</a>';
})->name('home.welcome');

Route::domain('{username.localhost:8000}')->group(function(){
  Route::get('/', function($username){
    return 'Anda mengunjungi akun '.$username;
  });
});
