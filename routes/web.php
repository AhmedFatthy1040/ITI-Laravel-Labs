<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'contacts'], function () {
    Route::get('/', 'App\Http\Controllers\ContactController@index');

    Route::get('/{id}', 'App\Http\Controllers\ContactController@show');

    Route::get('/{id}/{name}', 'App\Http\Controllers\ContactController@showWithName')
        ->where(['name' => '[a-zA-Z]+']);

    Route::get('/create', 'App\Http\Controllers\ContactController@create');

    Route::post('/', 'App\Http\Controllers\ContactController@store');

    Route::get('/{id}/edit', 'App\Http\Controllers\ContactController@edit');

    Route::put('/{id}', 'App\Http\Controllers\ContactController@update');

    Route::delete('/{id}', 'App\Http\Controllers\ContactController@destroy');
});
