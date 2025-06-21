<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\MyController;
use App\Http\Middleware\Admin;
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


// Route siswa  
Route::get('siswa',[MyController::class,'index']);
Route::get('siswa/create',[MyController::class,'create']);
Route::post('/siswa', [MyController::class, 'store']);

// show
Route::get('siswa/{id}',[MyController::class,'show']);



Route::get('siswa', [MyController::class, 'index']);    

// create     
Route::get('siswa/create', [MyController::class, 'create']); 
Route::post('siswa', [MyController::class, 'store']);   

// show     
Route::get('siswa/{id}', [MyController::class, 'show']);  

// edit data
Route::get('siswa/{id}/edit', [MyController::class, 'edit']);   
Route::put('siswa/{id}', [MyController::class, 'update']);

//delete
Route::delete('siswa/{id}', [MyController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::Routes();
// import controllernya

// Route Admin / Backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/',  [BackendController::class, 'index']);

});