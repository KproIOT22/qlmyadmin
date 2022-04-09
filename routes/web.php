<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\HomeController;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

// HomePage//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Account settings //
Route::get('/settings-account', [App\Http\Controllers\ProfileController::class, 'account'])->name('settings-account');
Route::get('/settings-connections', [App\Http\Controllers\ProfileController::class, 'connections'])->name('settings-connections');
Route::get('/settings-notifications', [App\Http\Controllers\ProfileController::class, 'notifications'])->name('settings-notifications');

// Maintenance and Error //
Route::get('/under-maintenance', [App\Http\Controllers\MaintenanceController::class, 'maintenance'])->name('under-maintenance');

// Products //
Route::resource('products', ProductController::class);
Route::get('/products.index', [App\Http\Controllers\ProductController::class, 'index'])->name('Products');



