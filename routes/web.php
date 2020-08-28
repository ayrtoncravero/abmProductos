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

#Providers
Route::get('/providers', 'ProvidersController@providers')->name('ProvidersController@providers');
Route::get('/providers/new', 'ProvidersController@providersNew')->name('ProvidersController@providersNew');
Route::post('/providers', 'ProvidersController@providers')->name('ProvidersController@providers');
Route::get('/providers/edit', 'ProvidersController@providersEdit')->name('ProvidersController@providersEdit');
Route::get('/providers/destroy', 'ProvidersController@providersDestroy')->name('ProvidersController@providersDestroy');

#Category
Route::get('/category', 'CategoryController@category')->name('CategoryController@category');
Route::get('/category/edit', 'CategoryController@categoryEdit')->name('CategoryController@categoryEdit');
Route::get('/category/destroy', 'CategoryController@categoryDestroy')->name('CategoryController@categoryDestroy');
Route::get('/category/new', 'CategoryController@categoryNew')->name('CategoryController@categoryNew');
Route::post('/category', 'CategoryController@category')->name('CategoryController@category');

#View products
Route::get('/products', 'ProductsController@products')->name('ProductsController@products');
Route::get('/products/edit', 'ProductsController@productsEdit')->name('ProductsController@editProducts');
Route::get('/products/destroy', 'ProductsController@productsDestroy')->name('ProductsController@deleteProducts');
Route::get('/products/new', 'ProductsController@productsNew')->name('ProductsController@createProductsView');
Route::post('/products', 'ProductsController@products')->name('ProductsController@createProducts');

#Dar de alta una compra
Route::get('/purchase', 'PurchaseController@purchase')->name('PurchaseController@purchase');
Route::post('/purchase', 'PurchaseController@purchase')->name('PurchaseController@purchase');

#Ver informes
Route::get('/reports', 'ReportsController@reports')->name('ReportsController@reports');
Route::get('/reports/stock', 'StockController@stock')->name('StockController@stock');
