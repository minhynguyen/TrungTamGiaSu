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
    return  view('TrangChu.index');
});
Route::get('/qltk', function () {
    return  view('TrangChu.quanlitaikhoan');
});


Route::get('/index', function () {
    return view('TrangChu.index');
});
// Route::get('/dangki', function () {
//     return view('TrangChu.dangkigs');
// })->name('dangkigs');


Route::get('/test', function () {
    return view('backend/chude/index');
});

Route::get('/register1', 'Auth\RegisterController@getRegister')->name('dangkigs');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Profile', 'ProfileController');

Route::group(['prefix'=>'admin'], function(){	
		Route::resource('TrinhDo', 'TrinhDoDayController');
		Route::resource('Mon','MonController');
		Route::resource('LinhVuc','LinhVucController');
		Route::resource('ChuyenNganh','ChuyenNganhController');
});




