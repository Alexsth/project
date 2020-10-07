<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\backendController::class, 'index'])->name('dashboard');
Route::resource('/dashboard/categories', CategoryController::class);
Route::get('/dashboard/categories/addImage/{id}', [App\Http\Controllers\CategoryController::class, 'image'])->name('categories.image');
Route::post('/dashboard/categories/addImage', [App\Http\Controllers\CategoryController::class, 'storeImg'])->name('categories.storeImg');
Route::delete('/dashboard/categories/destroyImage/{id}', [App\Http\Controllers\CategoryController::class, 'destroyImg'])->name('categories.destroyImg');
