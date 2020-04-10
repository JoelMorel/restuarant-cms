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

//Static Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}t', 'StaticPagesController@singleMenu');

Route::get('/about', 'StaticPagesController@about');

Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@saveReservation');
Route::get('/reservations/thank-you', 'StaticPagesController@thankYou');


Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/offers/thank-you', 'StaticPagesController@thankYou');



//Admin 
Route::get('/admin', 'admin\AdminController@dashboard');

Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@update');
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');

Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::post('/admin/food-items', 'admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');

// Admin/Customers
Route::get('/admin/members', 'admin\MemberController@index');
Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete');


Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::post('/admin/reservations/create', 'admin\ReservationController@store');
Route::get('/admin/reservations/{id}/edit', 'admin\ReservationController@edit');
Route::put('/admin/reservations/{id}/edit', 'admin\ReservationController@update');
Route::delete('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');


// Admin/Users
Route::get('/admin/users/', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::post('/admin/users/create', 'admin\UsersController@store');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::put('/admin/users/{id}/edit', 'admin\UsersController@update');
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete');



//Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});

//Static Pages
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}t', 'StaticPagesController@singleMenu');

Route::get('/about', 'StaticPagesController@about');
Route::get('/waitlist', 'StaticPagesController@about');
Route::get('/contact', 'StaticPagesController@about');
Route::get('/offers', 'StaticPagesController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
