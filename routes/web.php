<?php

//All Controller Path...
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcomecontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NumberVerifyController;

use App\Http\Controllers\Auth\LoginController;

//Users & Roles Route Controller Path...
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\userRoles\RoleController;
use App\Http\Controllers\userRoles\UserController;


use App\Http\Controllers\backend\PurchaseReportController;






// All routes list here....
Auth::routes();
Route::get('/', [Welcomecontroller::class, 'index'])->name('welcome');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::post('import-data', [Welcomecontroller::class, 'importData'])->name('import-data');

Route::get('user-data-page', [Welcomecontroller::class, 'UserDataPage'])->name('user-data-page');
Route::post('user-data-import', [Welcomecontroller::class, 'UserDataImport'])->name('user-data-import');


Route::get('business-networks-page', [Welcomecontroller::class, 'businessNetworkDataPage'])->name('business-networks-page');
Route::post('business-network-data-import', [Welcomecontroller::class, 'businessNetworkDataImport'])->name('business-network-data-import');

//Role Permission Routes Here....
/*Route::middleware('auth')->prefix('dashboard')->group(function () {*/
Route::middleware(['auth'])->group(function () {

    //Users & Roles Controller...
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});

/*
Route::get('/', function () {
    return redirect('/login');
});



Route::get('register', function () {
    return redirect('/');
});
*/

