<?php

//use Illuminate\Http\Request;

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

 // ANTES DEL JWT 

Route::group([
    'middleware'=> 'api',
],function(){

    Route::get('login','PersonaController@index');
});



// JWT confi
Route::group(['middleware' => 'cors'],function(){
//http://localhost:8000/api/login
});

