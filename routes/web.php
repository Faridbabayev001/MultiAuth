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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('user/login','User\LoginController@userLogin')->name('userLogin');
Route::get('user/register','User\RegisterController@userRegister')->name('userRegister');
Route::post('user/login','User\LoginController@postUserLogin')->name('postLoginUser');
Route::post('user/register','User\RegisterController@postRegisterUser')->name('postRegisterUser');

Route::group(['middleware' => 'user','prefix' => 'user'],function (){
    require __DIR__.'/user/user.php';
});



Route::group(['middleware' => 'admin','prefix' => 'admin'],function (){
    require __DIR__.'/admin/admin.php';
});
