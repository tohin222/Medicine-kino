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


Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/dashboard', 'backend\DashboardController@dashboard')->name('dashboard');
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
    Route::get('/order', 'backend\BuyController@buy_order')->name('buy_order');
});

//recycle route
Route::group(['prefix'=>'recycle'],function(){
    Route::get('/medicine', 'backend\RecycleBinController@recycle_bin_medicine')->name('recycle_bin_medicine');
    Route::get('/medicine/restore/{medicine_id}', 'backend\RecycleBinController@recycle_bin_medicine_restore');

    Route::get('/company', 'backend\RecycleBinController@recycle_bin_company')->name('recycle_bin_company');
    Route::get('/company/restore/{medicine_id}', 'backend\RecycleBinController@recycle_bin_company_restore');

    Route::get('/disease', 'backend\RecycleBinController@recycle_bin_disease')->name('recycle_bin_disease');
    Route::get('/disease/restore/{disease_id}', 'backend\RecycleBinController@recycle_bin_disease_restore');

});

Route::group(['prefix'=>'profile'],function(){

    Route::get('/profile', 'backend\ProfileController@profile')->name('profile');

});
Route::group(['prefix'=>'stock'],function(){

    Route::get('/out', 'backend\StockOutController@stock_out')->name('stock_out');
    Route::get('/add_new_medicine/{medicine_id}/{quantity}', 'backend\StockOutController@new_medicine_add');

});


});
