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

Route::get('/', function () { return view('home');  });
Route::get('/about', [\App\Http\Controllers\PageController::class, 'home_about']);
Route::get('/product', [\App\Http\Controllers\PageController::class, 'home_product']);
Route::get('/contact', [\App\Http\Controllers\PageController::class, 'home_contact']);
Route::get('/career', [\App\Http\Controllers\PageController::class, 'home_career']);

Route::get('/product/blister', [\App\Http\Controllers\PageController::class, 'product_blister']);
Route::get('/product/tray', [\App\Http\Controllers\PageController::class, 'product_tray']);
Route::get('/product/cup', [\App\Http\Controllers\PageController::class, 'product_cup']);
Route::get('/product/lid', [\App\Http\Controllers\PageController::class, 'product_lid']);
Route::get('/product/bottle', [\App\Http\Controllers\PageController::class, 'product_bottle']);





