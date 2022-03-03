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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('shankar',function(){ return "shankar here"; });



//admin all routes
Route::resource('admin', AdminController::class);
Route::get('admin/parcel/view', 'AdminController@ViewParcel');
Route::get('admin/parcel/{id}', 'AdminController@SearchParcel');
Route::get('admin/users/view','AdminController@ViewUsers');
Route::get('admin/users/{id}','AdminController@ViewSingleUser');



//parcel all routes
Route::resource('parcel', ParcelController::class);
Route::get('parcel/status/{id}','ParcelController@Status');


Route::get('delivery','DeliveryController@index')->name('deliery');

Route::get('pickup','PickupController@index')->name('pickup');
