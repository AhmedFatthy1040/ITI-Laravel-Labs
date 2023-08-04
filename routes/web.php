<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::get('/{student}', [StudentController::class, 'edit'])->name('edit');
    Route::put('/{student}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('destroy');
});
