<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MemberController;
use App\http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(MemberController::class)->group(function (){
    route::get('/member', 'index');
    route::post('/member/search', 'searchMember')->name('nama');
    route::get('/member/add', 'addMember');
    route::post('/member/create', 'createMember');
    route::get('/member/delete/{id}', 'deleteMember');
    // routs edit
    route::get('/member/edit/{id}', 'editMember');
    route::post('/member/update/{id}', 'updateMember');
});
    // produks
    Route::controller(ProdukController::class)->group(function (){
        Route::get('/produk','index');
    route::post('/produk/search', 'searchProduk')->name('kd_produk');
        Route::get('/produk/add','addproduk');
        Route::post('/produk/add','createProduk');
});
