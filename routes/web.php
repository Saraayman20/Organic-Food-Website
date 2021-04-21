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

Route::view('signup','registerhome');
Route::post('signup','RegisterController@createuser');

Route::view('login','login');
Route::post('logged','RegisterController@loginuser');


Route::get('/about', function () {
    return view('about1');
});

Route::get('/home', 'UserController@ResetDBOrders');

Route::get('/shop','UserController@AllProducts');


Route::get('/details', function () {
    return view('shop_details');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/loggedhome', function () {
    return view('loggedhome');
});


Route::get('/contact', function () {
    return view('contact2');
});








Route::get('/breakfast','UserController@breakfast');

Route::get('/blog','UserController@blogs');


Route::get('/blogdetails/{blogid}','UserController@blogdetails')->name('blogdetails');

Route::get('/savedData/{id}','UserController@ShoppingCart')->name('savedData');

Route::get('/updated/{id}','UserController@UpdatePrice')->name('updated');

Route::get('/deleted/{id}','UserController@DeleteOrder')->name('deleted');

Route::get('/cart','UserController@Orders');

Route::get('/checkout','UserController@CheckOutOrders');

Route::get('/lunch','UserController@lunch');
Route::get('/dinner','UserController@dinner');
Route::get('/dessert','UserController@dessert');
Route::get('/juice','UserController@juice');
Route::get('/fruit','UserController@fruit');
Route::get('/snack','UserController@snack');
Route::get('/details/{id}','UserController@details')->name('details');