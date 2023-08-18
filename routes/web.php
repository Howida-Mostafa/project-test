<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//when make login direct to dashboard
Route::get('/home', function () {
    return redirect('/dashboard');
});

// normal pages routes 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// dashboard routes 
// check the user before open dashboard make login

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home'); 
    Route::resource('company', CompanyController::class);
    Route::get('/company/delete/{company}', [CompanyController::class, 'delete'])->name('company.delete');
    Route::resource('employee', EmployeeController::class);
    Route::get('/employee/delete/{company}', [EmployeeController::class, 'delete'])->name('employee.delete');
});

Auth::routes();

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


