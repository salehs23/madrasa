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
Route::get('/view_vehicles', [App\Http\Controllers\HomeController::class, 'view_vehicles'])->name('view_vehicles');
Route::get('/view_invoices', [App\Http\Controllers\HomeController::class, 'view_invoices'])->name('view_invoices');
Route::get('/view_orders', [App\Http\Controllers\HomeController::class, 'view_orders'])->name('view_orders');
Route::get('/view_dashboard', [App\Http\Controllers\HomeController::class, 'view_dashboard'])->name('view_dashboard');
Route::get('/view_users', [App\Http\Controllers\HomeController::class, 'view_users'])->name('view_users');
Route::get('/view_customers', [App\Http\Controllers\HomeController::class, 'view_customers'])->name('view_customers');