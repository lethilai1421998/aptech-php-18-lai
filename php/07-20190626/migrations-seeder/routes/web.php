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
Route::get('/form-nguoi-dung','UsersController@HienThiFormNguoiDung');
Route::get('/doc-tat-nguoi-dung','UsersController@docTatCaNguoiDung');
Route::get('/doc-mot-nguoi-dung/{idNguoiDung}','UsersController@docMotNguoiDung');
Route::get('/form-sua-nguoi-dung','UsersController@sua_Nguoi_dung');



Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::get('','HomeController@getIndex');
Route::get('dang-ki','LoginController@getSigin');
Route::post('dang-ki','LoginController@postSigin');