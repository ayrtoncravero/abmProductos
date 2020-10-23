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

Route::get('/home', 'HomeController@home')->name('HomeController@home');

Route::get('/providers/new', 'ProvidersController@createView')->name('ProvidersController@createView');
Route::post('/providers', 'ProvidersController@create')->name('ProvidersController@create');
Route::get('/providers', 'ProvidersController@index')->name('ProvidersController@index');
Route::get('/providers/{id}/edit', 'ProvidersController@edit')->name('ProvidersController@edit');
Route::post('/providers/{id}', 'ProvidersController@update')->name('ProvidersController@update');
Route::get('/providers/{id}/destroyView', 'ProvidersController@destroyView')->name('ProvidersController@destroyView');
Route::delete('/providers/{id}/destroy', 'ProvidersController@destroy')->name('ProvidersController@destroy');

Route::get('/categories/new', 'CategoriesController@createView')->name('CategoriesController@createView');
Route::post('/categories', 'CategoriesController@create')->name('CategoriesController@create');
Route::get('/categories', 'CategoriesController@index')->name('CategoriesController@index');
Route::get('/categories/{id}/edit', 'CategoriesController@editView')->name('CategoriesController@editView');
Route::post('/categories/{id}', 'CategoriesController@update')->name('CategoriesController@update');
Route::get('categories/{id}/destroyView', 'CategoriesController@destroyView')->name('CategoriesController@destroyView');
Route::delete('/categories/{id}/destroy', 'CategoriesController@destroy')->name('CategoriesController@destroy');

Route::get('/products/new', 'ProductsController@createView')->name('ProductsController@createView');
Route::post('/products', 'ProductsController@create')->name('ProductsController@create');
Route::get('/products', 'ProductsController@index')->name('ProductsController@index');
Route::get('/products/{id}/edit', 'ProductsController@edit')->name('ProductsController@edit');
Route::post('/products/{id}', 'ProductsController@update')->name('ProductsController@update');
Route::get('/products/{id}/destroyView', 'ProductsController@destroyView')->name('ProductsController@destroyView');
Route::delete('/products/{id}/destroy', 'ProductsController@destroy')->name('ProductsController@destroy');
Route::get('/search', 'ProductsController@search')->name('ProductsController@search');

Route::get('/purchases', 'PurchasesController@createView')->name('PurchasesController@createView');
Route::post('/purchases', 'PurchasesController@create')->name('PurchasesController@create');
Route::get('/stock', 'PurchasesController@index')->name('PurchasesController@index');
Route::post('/stock', 'PurchasesController@stock')->name('PurchasesController@stock');

Route::get('/reports/stock', 'ReportsController@stock')->name('ReportsController@stock');
