<?php
Use App\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('offices', 'OfficeController@index');
Route::get('offices/{office}', 'OfficeController@show');
Route::post('offices', 'OfficeController@store');
Route::put('offices/{office}', 'OfficeController@update');
Route::delete('offices/{office}', 'OfficeController@delete');