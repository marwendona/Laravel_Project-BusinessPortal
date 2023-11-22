<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\OrderController;


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

Route::middleware(['auth'])->group(function () {
});

Route::resource('Region',RegionController::class);
Route::resource('Provider',ProviderController::class);
Route::resource('Activity',ActivityController::class);

Route::get('/',[OrderController::class,'home'])->name('order.home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/recherche',[OrderController::class,'recherche'])->name('order.recherche');
Route::post('/recherche', [OrderController::class,'search'])->name('order.search');