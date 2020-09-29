<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('nota', 'NotaController@index');
// //list single article
// Route::get('nota/{id}', 'NotaController@show');
// // create new article
// Route::post('nota', 'NotaController@store');
// // update article
// Route::put('nota', 'NotaController@store');
// // delete article
// Route::delete('nota/{id}', 'NotaController@destroy');