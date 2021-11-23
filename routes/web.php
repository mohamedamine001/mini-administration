<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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

//Route::get('list','App\Http\Controllers\ClientController@index' );

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

 
Route::middleware(['auth:sanctum', 'verified'])->get('/clients','App\Http\Controllers\ClientController@index' )->name('clients');

Route::middleware(['auth:sanctum', 'verified'])->get('/orders','App\Http\Controllers\CommandeController@index' )->name('orders');