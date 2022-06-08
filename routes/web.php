<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/', 'VisitorsController@index');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/user-type', 'UserTypeController');


Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });
  
 
 
Route::prefix('admin')->name('admin.')->group(function() {

    Route::middleware(['guest:admin'])->group(function() {
        Route::view('/', 'dashboard.admin.login')->name('login');
        Route::post('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
        Route::view('/register', 'dashboard.admin.register')->name('register');
    });

    Route::middleware(['auth:admin'])->group(function() {
        Route::resource('/home', 'DashboardController');
        Route::resource('/dashboard', 'DashboardController');
        Route::resource('/client', 'ClientController');
        Route::resource('/projects', 'ProjectController');
        Route::resource('/refunds', 'RefundController');
        Route::resource('/purchases', 'PurchaseController');
        Route::resource('/cheques', 'ChequeController');
        Route::resource('/users', 'UserController');
        Route::resource('/logs', 'LogsController');
        Route::post('/change-password', 'UserController@changePassword');
        Route::resource('/employee_names', 'EmployeeNameController');
        Route::post('logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('project-report/{id}/', 'PDFMaker@gen');
        Route::get('project-summary-report', 'PDFMaker@generateProjectSummaryReport');
        Route::get('cheques-utilization-report/{id}/', 'PDFMaker@chequesUtilizationReport');
        Route::get('disbursement-cheque-summary', 'PDFMaker@disburseChequeSummary');
        // Route::get('/invoice', function () {

        //     $pdf = PDF::loadView('invoice');
        //     return $pdf->download('invoice.pdf');
        // });
    });
});
