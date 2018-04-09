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
	$cards = App\Card::all();
	return view('welcome')
	->with('cards', $cards);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/category', 'Admin\\CategoryController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/card', 'Admin\\CardController');
});

Route::get('bodas', 'GeneralController@bodas');
Route::get('infantiles', 'GeneralController@infantiles');
Route::get('foto', 'GeneralController@foto');
Route::get('laser', 'GeneralController@laser');
Route::get('quince', 'GeneralController@quince');
Route::get('single-product/{id}', 'GeneralController@singleProduct');
Route::post('process', 'GeneralController@process');
Route::post('order', 'GeneralController@order');
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/order', 'Admin\\OrderController');
});