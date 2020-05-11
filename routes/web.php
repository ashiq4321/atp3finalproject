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
Route::get('/login', 'LoginController@index')->name('login.index')->middleware("alreadyin");
Route::post('/login', 'LoginController@verify');

Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::post('/signup', 'SignupController@store');

Route::get('/login/passrecover', 'LoginController@passrecover')->name('login.passrecover');
Route::post('/login/passrecover', 'LoginController@passrecovered');

Route::get('/manager/view_Available/{houseid}', 'ManagerController@makeadsSpam')->name('manager.makeadsSpam')->middleware('sess','areYoumanager');
Route::get('/manager/view_Rented/{houseid}', 'ManagerController@makehouseAvailable')->name('manager.makehouseAvailable')->middleware('sess','areYoumanager');
Route::get('/manager/view_Rented', 'ManagerController@rentedhouse')->name('manager.rentedhouse')->middleware("sess","areYoumanager");
Route::get('/manager/view_Available', 'ManagerController@housetolet')->name('manager.housetolet')->middleware("sess","areYoumanager");
Route::get('/manager/view_Owners/{username}/unblock', 'ManagerController@unblockOwner')->name('manager.unblockOwner')->middleware('sess','areYoumanager');
Route::get('/manager/view_Owners/{username}/block', 'ManagerController@blockOwner')->name('manager.blockOwner')->middleware('sess','areYoumanager');
Route::get('/manager/view_Owners', 'ManagerController@owners')->name('manager.owners')->middleware("sess","areYoumanager");
Route::get('/manager/view_Customers/{username}/unblock', 'ManagerController@unblockCustomer')->name('manager.unblockCustomer')->middleware('sess','areYoumanager');
Route::get('/manager/view_Customers/{username}/block', 'ManagerController@blockCustomer')->name('manager.blockCustomer')->middleware('sess','areYoumanager');
Route::get('/manager/view_Customers', 'ManagerController@customers')->name('manager.customers')->middleware("sess","areYoumanager");
Route::get('/manager/pendingHouseowners/{username}/accept', 'ManagerController@accepthouseProvider')->name('manager.accepthouseProvider')->middleware('sess','areYoumanager');
Route::get('/manager/pendingHouseowners/{username}/reject', 'ManagerController@rejecthouseProvider')->name('manager.rejecthouseProvider')->middleware('sess','areYoumanager');
Route::get('/manager/pendingHouseowners', 'ManagerController@pendingHouseowners')->name('manager.pendingHouseOwner')->middleware("sess","areYoumanager");
Route::get('/manager/pendingCustomers/{username}/accept', 'ManagerController@acceptCustomer')->name('manager.acceptCustomer')->middleware('sess','areYoumanager');
Route::get('/manager/pendingCustomers/{username}/reject', 'ManagerController@rejectCustomer')->name('manager.rejectCustomer')->middleware('sess','areYoumanager');
Route::get('/manager/pendingCustomers', 'ManagerController@pendingCustomers')->name('manager.pendingCustomers')->middleware("sess","areYoumanager");
Route::patch('/manager/profile/{username}/edit', 'ManagerController@updateProfile')->name('manager.updateProfile');
Route::get('/manager/profile', 'ManagerController@editProfile')->middleware("sess","areYoumanager");
Route::resource('manager', 'ManagerController')->middleware("sess","areYoumanager");

Route::resource('customer', 'CustomerController')->middleware("sess");
Route::resource('houseProvider', 'HouseProviderController')->middleware("sess");
Route::resource('admin', 'AdminController')->middleware("sess");

Route::get('/logout', 'logoutController@index');

Route::get('/userblocked', 'UserBlockController@index');