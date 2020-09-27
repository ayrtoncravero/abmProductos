<?php

use Illuminate\Support\Facades\Route;

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

//Cambiar esto para que muestre todos los productos enseguida, o meter un inicio mas lindo
Route::get('/', function () {
    return view('welcome');
});

#Home
Route::get('/home', 'HomeController@home')->name('HomeController@home');

#Provider
#REACOMODADO
Route::get('/providers/new', 'ProvidersController@providersNew')->name('ProvidersController@providersNew');
Route::post('/providers', 'ProvidersController@create')->name('ProvidersController@create');
Route::get('/providers', 'ProvidersController@providers')->name('ProvidersController@providers');
Route::get('/providers/{id}/edit', 'ProvidersController@providersEdit')->name('ProvidersController@providersEdit');
Route::post('/providers/{id}', 'ProvidersController@update')->name('ProvidersController@update');
Route::get('/providers/{id}/destroyView', 'ProvidersController@destroyView')->name('ProvidersController@destroyView');
Route::delete('/providers/{id}/destroy', 'ProvidersController@destroy')->name('ProvidersController@destroy');

#Category
#REACOMODADO
Route::get('/categorys/new', 'CategorysController@categorysNew')->name('CategorysController@categorysNew');
Route::post('/categorys', 'CategorysController@create')->name('CategorysController@create');
Route::get('/categorys', 'CategorysController@categorys')->name('CategorysController@categorys');
Route::get('/categorys/{id}/edit', 'CategorysController@edit')->name('CategorysController@edit');
Route::post('/categorys/{id}', 'CategorysController@update')->name('CategorsyController@update');
Route::get('categorys/{id}/destroyView', 'CategorysController@destroyView')->name('CategorysController@destroyView');
Route::delete('/categorys/{id}/destroy', 'CategorysController@destroy')->name('CategorysController@destroy');

#View products
#REACOMODADO
Route::get('/products/new', 'ProductsController@productsNew')->name('ProductsController@productsNew');
Route::post('/products', 'ProductsController@create')->name('ProductsController@create');
Route::get('/products', 'ProductsController@products')->name('ProductsController@products');
Route::get('/products/{id}/edit', 'ProductsController@edit')->name('ProductsController@edit');
Route::post('/products/{id}', 'ProductsController@update')->name('ProductsController@update');
Route::get('/products/{id}/destroyView', 'ProductsController@destroyView')->name('ProductsController@destroyView');
Route::delete('/products/{id}/destroy', 'ProductsController@destroy')->name('ProductsController@destroy');
Route::get('/search', 'ProductsController@search')->name('ProductsController@search');

#FALTA REVISAR ESTE
#Dar de alta una compra
Route::get('/purchases', 'PurchasesController@purchases')->name('PurchasesController@purchases');
Route::post('/purchases', 'PurchasesController@purchasesCreate')->name('PurchasesController@purchasesCreate');

#FALTA REVISAR ESTE
#Ver informes
Route::get('/reports', 'ReportsController@reports')->name('ReportsController@reports');
Route::get('/reports/stock', 'ReportsController@stock')->name('ReportsController@stock');
