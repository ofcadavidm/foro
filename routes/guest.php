<?php

Route::get('register', [
    'uses' => 'RegisterController@create',
    'as' => 'register'
]);

Route::post('register', [
    'uses' => 'RegisterController@store',
]);

Route::get('login', [
    'uses' => 'TokenController@create',
    'as' => 'login',
]);

Route::post('login', [
    'uses' => 'TokenController@store',
]);
