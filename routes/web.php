<?php

use App\Http\Controllers\SongController;

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

/*Route::get('/', function () {
    return view('song');
});*/

Route::get('/',[
    'uses'=>'SongController@show',
    'as'=>'songs.show'
]);

Route::post('/create',[
    'uses'=>'SongController@create',
    'as'=>'songs.create'
    
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
