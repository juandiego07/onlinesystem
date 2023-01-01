<?php

use Illuminate\Support\Facades\DB;
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
    return view('epayco.auth.login');
})->name('home');

Route::get('dashboard', 'App\Http\Controllers\HomeController@index')
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('dashboard/{status}', 'App\Http\Controllers\HomeController@show')
    ->middleware(['auth'])
    ->name('dashboard.show');

Route::get('customer', 'App\Http\Controllers\CustomerController@index')
    ->middleware(['auth'])
    ->name('customer');

Route::post('customer', 'App\Http\Controllers\CustomerController@store')
    ->middleware(['auth'])
    ->name('customer.create');

Route::get('invoice', 'App\Http\Controllers\BillController@index')
    ->middleware(['auth'])
    ->name('invoice');

Route::post('invoice', 'App\Http\Controllers\BillController@store')
    ->middleware(['auth'])
    ->name('invoice.create');

require __DIR__ . '/auth.php';
