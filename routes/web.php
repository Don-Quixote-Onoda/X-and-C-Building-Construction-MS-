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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/dashboard', 'DashboardController');
Route::resource('/users', 'UserController');
Route::resource('/user-type', 'UserTypeController');
Route::resource('/client', 'ClientController');
Route::resource('/projects', 'ProjectController');
Route::resource('/refunds', 'RefundController');
Route::resource('/purchases', 'PurchaseController');
Route::resource('/cheques', 'ChequeController');
Route::post('/change-password', 'UserController@changePassword');
Route::resource('/employee_names', 'EmployeeNameController');

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });
  
 
 
