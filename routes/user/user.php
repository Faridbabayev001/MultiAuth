<?php


Route::resource('post','User\PostController');
Route::get('profile','User\UserController@profile')->name('userProfile');
