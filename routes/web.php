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
    return view('epayco.auth.login');
})->name('home');

Route::get('/dashboard', function () {
    return view('epayco.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('customer', 'App\Http\Controllers\CustomerController@index')
    ->middleware(['auth'])
    ->name('customer');

Route::get('invoice', 'App\Http\Controllers\BillController@index')
    ->middleware(['auth'])
    ->name('invoice');
