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

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', "FrontController@main")->name('main');
Route::get('/artists', "FrontController@frontartists")->name('frontartists');
Route::get('/gallery', "FrontController@frontgallery")->name('frontgallery');
Route::get('/shop', "FrontController@shop")->name('shop');
Route::get('/contact', "FrontController@contact")->name('contact');
Route::get('/info', "FrontController@info")->name('info');
Route::get('/cart', "FrontController@cart")->name('cart');


Route::resource('admin/users', "AdminUsersController");
Route::resource('admin/roles', "AdminRolesController");
Route::resource('admin/artists', "AdminArtistsController");
Route::resource('admin/tattoos', "AdminTattoosController");
Route::resource('admin/advances', "AdminAdvancesController");

Route::get('/admin', 'HomeController@index')->name('admin');


