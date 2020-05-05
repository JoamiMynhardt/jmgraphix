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

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin')->middleware('auth');

Route::resource('categories', 'CategoryController', ['except' => ['create']]);

//Route::resource('albums','AlbumsController')->middleware('auth');



Route::resource('portfolio','PortfolioController')->middleware('auth');

Route::resource('photos','PhotosController')->middleware('auth');

Route::resource('tags', 'TagController', ['except' => ['create']]);

Route::get('project/{slug}', 'PagesController@getSingle')->name('project')
->where('slug', '[\w\d\-\_]+');



Route::get('contact','PagesController@getContact');
Route::post('contact','PagesController@postContact');

Route::get('portfolioMain','PagesController@getPortfolioMain');

Route::get('resume','PagesController@getResume');

Route::get('/', 'PagesController@getIndex');

//Route::get('portfolio.store','PortfolioController@getStore');
