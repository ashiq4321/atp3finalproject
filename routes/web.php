<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\sessionverify;
use App\Http\Middleware\alreadyLogged;
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
Route::get('/login', 'LoginController@index')->middleware("alreadyin");
Route::post('/login', 'LoginController@verify');

Route::get('/signup', 'SignupController@index');

Route::get('/manager/pendingCustomers/{username}/accept', 'ManagerController@acceptCustomer')->name('customer.accept')->middleware('sess','areYoumanager');
Route::get('/manager/pendingCustomers/{username}/reject', 'ManagerController@rejectCustomer')->name('customer.reject')->middleware('sess','areYoumanager');
Route::get('/manager/pendingCustomers', 'ManagerController@pendingCustomers')->name('customer.pending')->middleware("sess","areYoumanager");
Route::patch('/manager/profile/{username}/edit', 'ManagerController@updateProfile')->name('manager.updateProfile');
Route::get('/manager/profile', 'ManagerController@editProfile')->middleware("sess","areYoumanager");
Route::resource('manager', 'ManagerController')->middleware("sess","areYoumanager");

Route::resource('customer', 'CustomerController')->middleware("sess");
Route::resource('houseProvider', 'HouseProviderController')->middleware("sess");
Route::resource('admin', 'AdminController')->middleware("sess");

Route::get('/logout', 'logoutController@index');

Route::get('/userblocked', 'UserBlockController@index');