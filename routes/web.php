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

Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('welcome');
}]);
Route::get('/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@index']);
Route::post('/validate_register', ['as' => 'validate_register', 'uses' => 'Auth\RegisterController@register']);
Route::get('/user/profile', 'UserController@index')->name('user.get.profile');
Route::get('/user/add_vendor', 'VendorController@addVendor')->name('user.add.vendor');
Route::post('/user/vendor/create', ['as' => 'create_vendor', 'uses' => 'VendorController@createVendor']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);