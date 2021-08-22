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


Route::get('/admin', function () {
    return view('backend.index');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//ADMIN


Route::group(['prefix' => 'auth'], function(){
    Route::resource('/category', 'CategoryController');
    Route::resource('/subcategory', 'SubcategoryController');
    Route::resource('/childcategory', 'ChildcategoryController');
});
Route::get('/','MenuController@menu');
