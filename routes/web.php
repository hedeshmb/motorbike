<?php

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

Auth::routes();

Route::get('/add', 'Backend\indexController@index')->name('add');
Route::post('/add',[
    'uses'  =>  'Backend\MotorbikesController@store',
    'as'    =>  'backend.motorbikes.store'
]);

Route::get('/{sortType?}',[
    'uses'  => 'HomeController@index',
    'as'    =>  'index'
]);

Route::get('/show/{id}',[
    'uses'  => 'HomeController@show',
    'as'    =>  'show'
]);


