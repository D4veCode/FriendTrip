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

//Frontend Routes
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/flights', 'FrontendController@flights')->name('flights');
Route::get('/hotels', 'FrontendController@hotels')->name('hotels');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/blog/{id}', 'FrontendController@blog_single')->name('blog_single');
Route::get('/flight/{id}', 'FrontendController@flight_single')->name('flight_single');
Route::get('/hotel/{id}', 'FrontendController@hotel_single')->name('hotel_single');
Route::get('/tour/{id}', 'FrontendController@tour_single')->name('hotel_single');

//

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/flights', 'FlightController')->except('show');
    Route::resource('/hotels', 'HotelController')->except('show');
    Route::resource('/blog', 'BlogController')->except('show');
    Route::resource('/about', 'AboutController')->except(['show', 'store', 'destroy']);
    Route::resource('/gallery', 'GalleryController')->except('show');
    Route::resource('/subs', 'SubscriberController')->except([
        'show', 'edit', 'update', 'destroy', 'create'
    ]);
});

