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

Route::get('/', function () {
    return view('welcome');
});

#Home
Route::get('/home', 'HomeController@home')->name('HomeController@home');

#Provider
Route::get('/providers', 'ProvidersController@providers')->name('ProvidersController@providers');
Route::get('/providers/edit', 'ProvidersController@providersEdit')->name('ProvidersController@providersEdit');
Route::get('/providers/destroy', 'ProvidersController@providersDestroy')->name('ProvidersController@providersDestroy');
Route::get('/providers/new', 'ProvidersController@providersNew')->name('ProvidersController@providersNew');
Route::post('/providers', 'ProvidersController@providersCreate')->name('ProvidersController@providersCreate');

#Category
Route::get('/category', 'CategorysController@categorys')->name('CategorysController@categorys');
Route::get('/category/edit', 'CategorysController@categorysEdit')->name('CategorysController@categorysEdit');
Route::get('/category/destroy', 'CategorysController@categorysDestroy')->name('CategorysController@categorysDestroy');
Route::get('/category/new', 'CategorysController@categorysNew')->name('CategorysController@categorysNew');
Route::post('/category', 'CategorysController@categoryCreate')->name('CategorysController@categoryCreate');

#View products
Route::get('/products', 'ProductsController@products')->name('ProductsController@products');
Route::post('/products/edit/{id}', 'ProductsController@productsEdit')->name('ProductsController@productsEdit');
Route::get('/products/edit/{id}', 'ProductsController@productsViewEdit')->name('ProductsController@productsViewEdit');
Route::post('/products/destroy/{id}', 'ProductsController@productsDestroy')->name('ProductsController@productsDestroy');
Route::get('/products/new', 'ProductsController@productsNew')->name('ProductsController@productsNew');
Route::post('/products', 'ProductsController@productsCreate')->name('ProductsController@productsCreate');
Route::get('/search', 'ProductsController@search')->name('ProductsController@search');

#Dar de alta una compra
Route::get('/purchases', 'PurchasesController@purchases')->name('PurchasesController@purchases');
Route::post('/purchases', 'PurchasesController@purchasesCreate')->name('PurchasesController@purchasesCreate');

#Ver informes
Route::get('/reports', 'ReportsController@reports')->name('ReportsController@reports');
Route::get('/reports/stock', 'ReportsController@stock')->name('ReportsController@stock');
