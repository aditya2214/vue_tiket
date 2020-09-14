<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/category','CategoryController');
Route::resource('/tiket','TiketController');

Route::get('/transaksi','TransaksiController@index');
Route::delete('/transaksi/delete/{transaksi}','TransaksiController@destroy');
Route::post('/transaksi/post','TransaksiController@store');
Route::put('/transaksi/update/{id}','TransaksiController@update');
Route::get('/transaksi/show/{transaksi}','TransaksiController@show');