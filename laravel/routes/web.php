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

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
Route::post('/store','AdminController@store')->name('store');

Route::post('/stock', 'ProduitController@stock')->name('stock');
Route::get('/valider','ProduitController@valider')->name('valider');
Route::get('/add','ProduitController@add')->name('add');
Route::post('/update','AdminController@modifier')->name('update');
Route::post('/delete','AdminController@delete')->name('delete');
Route::get('/delete','ProduitController@delete')->name('delete');
Route::group( ['prefix' => 'produit'], function (){

    Route::get('/{id}','ProduitController@produit')->name('produit');
});

Route::group( ['middleware' => 'auth'], function() {


    Route::get('/catalogue','CatalogueController@catalogue')->name('catalogue');

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::patch('/profile/{id}', 'ProfileController@update');

});