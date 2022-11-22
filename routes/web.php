<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MemberController;
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

Route::controller(MemberController::class)->group(function (){
    route::get('/member', 'index');

    route::post('/member/search', 'searchMember')->name('nama');
    route::get('/member/add', 'addMember');
    route::post('/member/create', 'createMember');
    route::get('/member/delete/{id}', 'deleteMember');
    // url edit
    route::get('/member/edit/{id}', 'editMember');
    route::post('/member/update/{id}', 'updateMember');
    // produks
});
