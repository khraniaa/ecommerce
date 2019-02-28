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

Route::get('/', 'ProductsController@index');

    //view('products/index',compact('products'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/panier', 'PanierController@index')->name('panier');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/panier/a/{n}','PanierController@add')->where('n','[0-9]+');
