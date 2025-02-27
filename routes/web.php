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

Route::get('/', ['uses' => 'PagesController@index', 'as' => 'index']);

Route::post('/register-ajax', ['uses' => 'Auth\RegisterController@register', 'as' => 'registerAjax']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoriesController', ['except' => ['show']]);

Route::get('/{id}', 'CategoriesController@show')->name('show.category');

Route::resource('products', 'ProductsController', ['except' => ['show']]);

Route::post('/products-click', ['uses' => 'ProductsController@viewProduct', 'as' => 'products-click']);

Route::get('/products/redirect', function(){
    return view('products.redirect');
});

//Route::get('/forms-login', 'FormsController')->name('LogIn');