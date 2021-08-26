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
//ad
Route::get('/ads/create','AdvertisementController@create')->name('ads.create');
Route::post('/ads/store','AdvertisementController@store')->name('ads.store');
Route::get('/ads','AdvertisementController@index')->name('ads.index');
Route::get('/ads/{id}/edit','AdvertisementController@edit')->name('ads.edit');
Route::post('/ads/{id}/update','AdvertisementController@update')->name('ads.update');
Route::get('/ads/{id}/delete','AdvertisementController@destroy')->name('ads.destroy');


//PRofile
Route::get('/profile','ProfileController@index')->name('profile.index');

//FRONTEND


Route::get('/product/{categorySlug}/{subcategorySlug}/{childcategorySlug}','FrontendController@findBaseOnChildcategory')->name('childcategory.show');
Route::get('/product/{categorySlug}/{subcategorySlug}','FrontendController@findBaseOnSubcategory')->name('subcategory.show');
Route::get('/product/{categorySlug}','FrontendController@findBaseOnCategory')->name('category.index');
Route::get('/products/{id}/{slug}','FrontendController@show')->name('product.show');








