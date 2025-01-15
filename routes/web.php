<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\AnalitikController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\Sesiadmin;
use App\Http\Controllers\SesiUser;
use Illuminate\Support\Facades\Route;

// // Route ke halaman utama
Route::get('/', function () {
    return view('User.Awal');
});

Route::get('/login_pengunjung', [SesiUser::class, 'index'])->name('login');
Route::post('/login_pengunjung', [SesiUser::class, 'login']);

// Route untuk resource controller HewanController
// Route::resource('loginadm', Sesiadmin::class);
Route::middleware(['guest'])->group(function(){
Route::get('/loginadm',[Sesiadmin::class,'index']);
Route::post('/loginadm',[Sesiadmin::class,'login']);
});
Route::get('/home', function(){
    return redirect('Admin/Dashboard');

});
Route::middleware(['auth'])->group(function(){
        Route::get('/Admin/Dashboard', [Admincontroller::class,'index']);
        Route::get('/Admin/Hewan', [HewanController::class, 'hewan']);
        Route::put('/Admin/Hewan/update/{id_hewan}', [HewanController::class, 'update']);
        Route::get('/Admin/Hewan/search', [HewanController::class, 'hewan']);
        Route::post('/Admin/Hewan/Tambah', [HewanController::class, 'store']);
        Route::delete('/Admin/Hewan/{id}', [HewanController::class, 'destroy'])->name('hewan.destroy');
        Route::get('/Admin/Acara', [AcaraController::class,'index']);
        Route::post('/Admin/Acara/Tambah', [AcaraController::class, 'store']);
        Route::put('/Admin/Acara/update/{id_acara}', [AcaraController::class, 'update']);
        Route::delete('/Admin/Acara/{id}', [AcaraController::class, 'destroy'])->name('acara.destroy');
        Route::get('/Admin/Analitik', [AnalitikController::class,'index']);
        Route::get('/Admin/logout', [Sesiadmin::class,'logout']);

});

//User Berhasil Login
Route::get('/Beranda', function () {
    return view('User.Beranda', [
        'title' => 'Beranda',
    ]);
    
});
Route::get('/Peta', function () {
    return view('User.Peta', [
        'title' => 'Peta',
    ]);
    
});

Route::get('/Kategori', function () {
    return view('User.Kategori', [
        'title' => 'Kategori',
    ]);
    
});

Route::get('/Laporan', function () {
    return view('User.Laporan', [
        'title' => 'Kategori',
    ]);
    
});

Route::get('/Semua_event', function () {
    return view('User.Semua_event', [
        'title' => 'Beranda',
    ]);
   
    
});

Route::get('/Semua_artikel', function () {
    return view('User.Semua_artikel', [
        'title' => 'Beranda',
    ]);
   
    
});

Route::get('/Pengunjung/logout', [SesiUser::class,'logout']);



