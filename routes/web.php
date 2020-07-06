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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'NhostingController@index');
Route::get('/about', 'NhostingController@about')->name('about');
Route::get('/hosting', 'NhostingController@hosting')->name('hosting');
Route::get('/blog-details', 'NhostingController@blog_details')->name('blog-details');
Route::get('/contact', 'NhostingController@contact')->name('contact');
Route::get('/main', 'NhostingController@main')->name('main');
Route::get('/pricing', 'NhostingController@pricing')->name('pricing');
Route::get('/blog', 'NhostingController@blog')->name('blog');
Route::get('/404', 'NhostingController@file404')->name('404');
Route::get('/about', 'NhostingController@about')->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
