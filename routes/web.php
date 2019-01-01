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

//medicine route
Route::group(['prefix'=>'medicine'],function(){
    Route::get('/add', 'backend\MedicineController@medicine_add')->name('medicine_add');
    Route::get('/show', 'backend\MedicineController@medicine_show')->name('medicine_show');
    Route::post('/create', 'backend\MedicineController@medicine_create')->name('medicine_create');
    Route::get('/delete/{medicine_id}', 'backend\MedicineController@medicine_delete');
    Route::get('/edit/{medicine_id}', 'backend\MedicineController@medicine_edit');
    Route::post('/update', 'backend\MedicineController@medicine_update')->name('medicine_update');
});


//company route
Route::group(['prefix'=>'company'],function(){
    Route::get('/add', 'backend\ComapnyController@company_add')->name('company_add');
    Route::get('/show', 'backend\ComapnyController@company_show')->name('company_show');
    Route::post('/create', 'backend\ComapnyController@company_create')->name('company_create');
    Route::get('/delete/{company_id}', 'backend\ComapnyController@company_delete');
    Route::get('/edit/{company_id}', 'backend\ComapnyController@company_edit');
    Route::post('/update', 'backend\ComapnyController@company_update')->name('company_update');
});

//company route
Route::group(['prefix'=>'disease'],function(){
    Route::get('/add', 'backend\DiseaseController@disease_add')->name('disease_add');
    Route::get('/show', 'backend\DiseaseController@disease_show')->name('disease_show');
    Route::post('/create', 'backend\DiseaseController@disease_create')->name('disease_create');
    Route::get('/delete/{disease_id}', 'backend\DiseaseController@disease_delete');
    Route::get('/edit/{disease_id}', 'backend\DiseaseController@disease_edit');
    Route::post('/update', 'backend\DiseaseController@disease_update')->name('disease_update');
});
//buy route
Route::group(['prefix'=>'buy'],function(){
    Route::get('/sells', 'backend\BuyController@buy_sells')->name('buy_sells');
    Route::get('/addmedicine/{medicine_id}/{quantity}', 'backend\BuyController@medicine_add_cart');
    Route::get('/cart', 'backend\BuyController@cart')->name('cart');
    Route::post('/order_all', 'backend\BuyController@order_all')->name('order_all');
});


});
