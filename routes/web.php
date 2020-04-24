<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;



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



//Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');
Route::get('/admin/estimated-revenue-daily', 'admin\AdminController@dailyRevenueLast30');


Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:Admin');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')->middleware('role:Admin');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@update')->middleware('role:Admin');
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete')->middleware('role:Admin');

Route::get('/admin/food-items', 'admin\FoodItemsController@index')->middleware('role:Admin');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')->middleware('role:Admin');
Route::post('/admin/food-items', 'admin\FoodItemsController@store')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')->middleware('role:Admin');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update')->middleware('role:Admin');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')->middleware('role:Admin');

// Admin/Customers
Route::get('/admin/members', 'admin\MemberController@index');
Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete');


Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::post('/admin/reservations/create', 'admin\ReservationController@store');
Route::get('/admin/reservations/{id}/edit', 'admin\ReservationController@edit');
Route::put('/admin/reservations/{id}/edit', 'admin\ReservationController@update');
Route::delete('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');


// Admin/Users
Route::get('/admin/users/', 'admin\UsersController@index')->middleware('role:Admin');
Route::get('/admin/users/create', 'admin\UsersController@create')->middleware('role:Admin');
Route::post('/admin/users/create', 'admin\UsersController@store')->middleware('role:Admin');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')->middleware('role:Admin');
Route::put('/admin/users/{id}/edit', 'admin\UsersController@update')->middleware('role:Admin');
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete')->middleware('role:Admin');

// Admin/Settings
Route::get('/admin/settings/general', 'admin\SettingController@general')->middleware('role:Admin');
Route::put('/admin/settings/general', 'admin\SettingController@updateGeneral')->middleware('role:Admin');
Route::get('/admin/settings/seo', 'admin\SettingController@SEO')->middleware('role:Admin');
Route::put('/admin/settings/seo', 'admin\SettingController@updateSEO')->middleware('role:Admin');
Route::get('/admin/settings/social', 'admin\SettingController@social')->middleware('role:Admin');
Route::put('/admin/settings/social', 'admin\SettingController@updateSocial')->middleware('role:Admin');



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

View::composer(['home', 'layouts/landing', 'pages/about', 'pages/contact', 'pages/offers', 'pages/reservations', 'pages/thank-you', 'pages/contact', 'menu/menuindex', 'menu/single-menu' ], function($view){
    $generalSetting = GeneralSetting::find(1);
    $socialSetting = SocialSetting::find(1);
    $seoSetting = SeoSetting::find(1);

    $view->with('settings', [
        "general" => $generalSetting,
        "social" => $socialSetting,
        "seo" => $seoSetting
    ]);


});