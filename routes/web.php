<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/test', function () {
    return "<h1>bonjour tous le monde</h1>";
})->name('test1');


Route::get('/page/test/home', function () {
    return "<h1>ceci est la page home</h1>";
})->name('pagehome');


Route::get('/page/{n}', function ($nom) {
    return "<h1>bonjour $nom</h1>";
})->name('page1');

Route::get('/page2/{n?}', function ($nom=null) {
    return "<h1>bonjour $nom</h1>";
})->name('page2');


Route::get('/home/{a}/{b?}',[HomeController::class,'index'])->name('home.index');
//exercice 1
Route::get('/{date}/{num}', [OrderController::class,'show'])
->name('show.order')->where(['date'=>'[0-9]{2}-[0-9]{2}-[0-9]{4}','num'=>'[0-9]+']);
//->where(['date'=>'[0-9]{2}-[0-9]{2}-[0-9]{4}','num'=>'[0-9]+']);


//exercice2 site web
Route::get('/',[OrderController::class,'home'])->name('order.home');
Route::get('/about',[OrderController::class,'about'])->name('order.about');
Route::get('/produit',[OrderController::class,'produit'])->name('order.produit');

Route::get('/contact',[OrderController::class,'contact'])->name('order.contact');

Route::post('/contact/save',[OrderController::class,'save'])->name('order.save');

Route::middleware(['auth'])->group(function () {
Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
