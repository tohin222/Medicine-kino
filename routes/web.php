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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin'],function(){


Route::group(['prefix'=>'map'],function(){
    Route::get('/show', 'backend\MapController@map')->name('map');
});


Route::group(['prefix'=>'medicine'],function(){
    Route::get('/add', 'backend\MedicineController@medicine_add')->name('medicine_add');
    Route::get('/show', 'backend\MedicineController@medicine_show')->name('medicine_show');
    Route::post('/create', 'backend\MedicineController@medicine_create')->name('medicine_create');
    Route::get('/delete/{medicine_id}', 'backend\MedicineController@medicine_delete');
    Route::get('/edit/{medicine_id}', 'backend\MedicineController@medicine_edit');
    Route::post('/update', 'backend\MedicineController@medicine_update')->name('medicine_update');
});



});