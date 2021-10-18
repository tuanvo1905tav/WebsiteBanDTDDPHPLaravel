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

Route::get('/', 'ChuyenHuongController@getTrangChu')->name('trangchu');

Route::get('dangnhap', 'ChuyenHuongController@getDangNhap')->name('dangnhap');
Route::post('dangnhap','ChuyenHuongController@postDangNhap');

Route::get('dangky', 'ChuyenHuongController@getDangKy')->name('dangky');
Route::post('dangky', 'ChuyenHuongController@postdangky');


Route::get('admin', 'ChuyenHuongController@getAdmin')->name('admin');
Route::post('admin', 'ChuyenHuongController@postThem') ;

Route::get('suaSanPham/{MaSANPHAM}', 'ChuyenHuongController@getSua');
Route::post('suaSanPham/{MaSANPHAM}', 'ChuyenHuongController@postSua');

Route::get('xoaSanPham/{MaSANPHAM}', 'ChuyenHuongController@getXoa');

Route::get('giohang/{MaSANPHAM}', 'ChuyenHuongController@getGioHang')->name('giohang');

Route::get('sanpham', 'ChuyenHuongController@getSanPham')->name('sanpham');

Route::get('/5g', 'ChuyenHuongController@get5g')->name('5g');
Route::get('/blow', 'ChuyenHuongController@getBlow')->name('blow');
Route::get('/night', 'ChuyenHuongController@getNight')->name('night');
Route::get('/gioithieu', 'ChuyenHuongController@getGioiThieu')->name('gioithieu');
Route::get('/sukien', 'ChuyenHuongController@getSuKien')->name('sukien');

