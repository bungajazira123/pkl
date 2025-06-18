<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
// Route basic
Route::get('about', function(){
    
    return 'ini halaman about';
});

Route::get('profile', function(){
    
    return view('profile');
    
});
// Route Parameter
 Route::get('produk/{namaProduk}', function ($a){
    
    return 'Saya Membeli <b>' . $a . '</b>';
});

Route::get('beli/{barang}/{jumlah}',function ($a, $b){
    
    return view('beli', compact('a','b'));
});

// Route  Optional Parameter
Route::get('kategori/{nama_kategori?}', function($nama = null){
   if($nama){
    return 'Anda Memilih Kategori:' . $nama;
   }else{
    return 'Anda Belum Memilih Kategori!';
   }
});

// Latihan 
Route::get('promo/{barang?}/{kode?}', function ($barang = null, $kode = null) {

    return view('promo', compact('barang', 'kode'));
});