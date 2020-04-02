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
Route::get('/', 'StaticPagesController@landing');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}t', 'StaticPagesController@singleMenu');

Route::get('/about', 'StaticPagesController@about');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');

//Admin 
Route::get('/admin', 'admin\AdminController@dashboard');

Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');

// Admin/Customers
Route::get('/admin/offers', 'admin\CustomersController@allOffers');
Route::get('/admin/reservations', 'admin\CustomersController@allReservations');

// Admin/Users
Route::get('/admin/users/', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');



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
