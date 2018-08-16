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
// Trang chủ
Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/danhsach', function () {
    return view('admin.event.danhsach');
});
Route::get('/themsinhvien', function () {
    return view('Administrator.SinhVien.themsinhvien');
});
Route::get('/testthem', function () {
    return view('Administrator.SinhVien.testThem');
});
Route::get('/danhsachsinhvien', function () {
    return view('Administrator.SinhVien.index');
});
Route::get('/danhgiatask', function () {
    return view('Administrator.DanhGia.danhgiatask');
});
Route::get('/diemdanh', function () {
    return view('Administrator.GiangVien.diemdanh');
});
Route::get('/danhsachgiangvien', function () {
    return view('Administrator.GiangVien.index');
});
Route::get('/test', function () {
    return view('Administrator.DanhGia.test');
});
Route::get('/login', function () {
    return view('layout.login');
});
Route::get('/forget-pass', function () {
    return view('layout.forget-pass');
});
Route::get('/ganday', function () {
    return view('admin.event.ganday');
});
Route::get('/thongke', function () {
    return view('admin.thongke.thongke');
});
Route::get('/danhsachnguoidung', function () {
    return view('admin.nguoidung.danhsachnguoidung');
});
Route::get('/quanlynguoidung', function () {
    return view('admin.nguoidung.quanlynguoidung');
});
Route::get('/danhsachnhomkpi','NhomKpiController@index')->name('danhsachnhomkpi');
Route::get('/themmoinhomkpi','NhomKpiController@create')->name('themmoinhomkpi');