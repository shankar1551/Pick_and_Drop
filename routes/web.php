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
Route::get('admin/parcel/view', 'AdminController@ViewParcel')->name('admin_parcel_view');
Route::get('admin/parcel/{id}', 'AdminController@SearchParcel')->name('admin_parcel_search');
Route::get('admin/users/view','AdminController@ViewUsers')->name('admin_users_view');
Route::get('admin/users/{id}','AdminController@ViewSingleUser')->name('admin_users_search');




//parcel all routes
Route::resource('parcel', ParcelController::class)->middleware('auth');
Route::post('parcel/status/','ParcelController@Status')->name('status');
Route::get('parcel/view/{id}','ParcelController@View')->name('parcel_view');



//routes for the pick and delivery man and pickcup man
Route::get('delivery','DeliveryController@Home')->name('delivery_home');
Route::get('delivery/index','DeliveryController@index')->name('delivery_index');

Route::get('pickup','PickupController@Home')->name('pickup_home');

Route::get('pickup/index','PickupController@Index')->name('pickup_index');



Route::get('/about', function()
{
    return view('/about');
})->name('about');