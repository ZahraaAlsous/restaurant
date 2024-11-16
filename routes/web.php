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

Route::get('/' , 'PagesController@index');
Route::get('/index' , 'PagesController@index');
Route::get('/about-us' , 'PagesController@about');

Route::get('/single-post' , 'PagesController@single_post');
Route::get('/menu' , 'PagesController@menu');

Route::get('/contact-us' , 'PagesController@contact');


Route::get('/order' , 'PagesController@order');
Route::get('/delivery_costs' , 'PagesController@delivery_costs');

Route::get('/reserve' , 'PagesController@reserve');
Route::get('/competition' , 'PagesController@competition');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirects', 'HomeController@redirects');
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/add/information', 'InformationController@add');
Route::post('/store/information', 'InformationController@store');
Route::get('/all/information', 'InformationController@all');
Route::get('/information/delete/{id}', 'InformationController@delete');
Route::get('/information/edit/{id}', 'InformationController@edit');
Route::post('/information/edit/{id}', 'InformationController@update');

Route::get('/add/meal', 'MealController@add');
Route::post('/store/meal', 'MealController@store');
Route::get('/all/meal', 'MealController@all');
Route::get('/meal/delete/{id}', 'MealController@delete');
Route::get('/meal/edit/{id}', 'MealController@edit');
Route::post('/meal/edit/{id}', 'MealController@update');

Route::get('/add/employees', 'EmployeeController@add');
Route::post('/store/employees', 'EmployeeController@store');

Route::get('/add/offers', 'OfferController@add');
Route::post('/store/offers', 'OfferController@store');

Route::get('/add/category', 'CategoryController@add');
Route::post('/store/category', 'CategoryController@store');


Route::get('/add/locations', 'LocationController@add');
Route::post('/store/locations', 'LocationController@store');


Route::get('/add/tables', 'TableController@add');
Route::post('/store/tables', 'TableController@store');



Route::get('/add/reservations', 'ReservationController@add');
Route::post('/store/reservations', 'ReservationController@store');
Route::get('/all/reservations', 'ReservationController@all');
Route::get('/reservations/delete/{id}', 'ReservationController@delete');
Route::get('/reservations/edit/{id}', 'ReservationController@edit');
Route::post('/reservations/edit/{id}', 'ReservationController@update');


Route::get('/reserve', 'ReservationController@add');
Route::post('/store/reservations', 'ReservationController@store');

Route::post('/store/orders', 'OrderController@store');