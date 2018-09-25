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


Route::get('/index', function () {
    return view('index');
});


Route::get('/test', function () {
    return view('backend/chude/index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin'], function(){	
		Route::resource('TrinhDo', 'TrinhDoDayController');
		Route::get('/TrinhDo/delete/{id}', ['as'=>'TrinhDo.delete', 'uses'=>'TrinhDoDayController@destroy']);

});
// Route::post('editItem', 'TrinhDoDayController@update');
Route::get('/TrinhDo', 'TrinhDoDayController@getAddEditRemoveColumnData')->name('TrinhDo1');




Route::resource('Mon','MonController');
// Route::post('Mon/changeStatus', array('as' => 'changeStatus', 'mon' => 'MonController@changeStatus'));


Route::resource('LinhVuc','LinhVucController');