<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('dashboard');
});


//vsita del dashboard de la Ciudad
Route::get('/ciudad','App\Http\Controllers\CiudadController@index');
Route::post('/guardarCiudad','App\Http\Controllers\CiudadController@store');
Route::delete('/eliminarCiudad/{id}','App\Http\Controllers\CiudadController@destroy');
Route::get('/reporteCiudad/{id}','App\Http\Controllers\CiudadController@show');
Route::get('/editarCiudad/{id}','App\Http\Controllers\CiudadController@edit');
Route::patch('/editarCiudad/editCiudad/{id}','App\Http\Controllers\CiudadController@update');
//Route::get('/reporteCiudad/{id}','App\Http\Controllers\CiudadController@show');