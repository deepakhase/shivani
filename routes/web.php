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
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/gallery-images', function () {
    return view('gallery-images');
})->name('gallery-images');

Route::get('/my-account', function () {
    return view('my-account');
})->name('my-account');

Route::get('/edit-profile', function () {
    return view('edit-profile');
})->name('edit-profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/main', 'Auth\RegisterController@sendOtp')->name('register.otp');
Route::post('/verifyotp', 'Auth\RegisterController@verifyOtp')->name('register.verify.otp');
