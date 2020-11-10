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

Route::get('/','PageController@mainfun')->name('mainpage');
Route::get('itemdetail/{id}','PageController@itemdetailfun')->name('itemdetailpage');
Route::get('itemBybrand/{id}','PageController@itemBybrand')->name('itemBybrand');


Route::get('promotion','PageController@promotion')->name('promotionpage');

Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('subcategory/{id}','PageController@subcategoryfun')->name('subcategorypage');
Route::get('backendroute','BackendController@backendfun')->name('backendpage');


Route::middleware('role:Admin')->group(function(){
	Route::resource('brands','BrandController');
	Route::resource('categories','CategoryController');
	Route::resource('subcategories','SubcategoryController');
	Route::resource('items','ItemController');

});


Route::resource('orders','OrderController');
Route::post('order_confirm','OrderController@order_confirm')->name('order_confirm');
Route::get('report_list',function(){
	return view('Backend.report_list');
})->name('report_list');
Route::post('report','OrderController@report')->name('report');

Route::get('dashboard','OrderController@dashboard')->name('dashboard');

Auth::routes();
Route::get('loginform','PageController@lgoinfun')->name('loginpage');
Route::get('registerform','PageController@registerfun')->name('registerpage');


Route::get('/home', 'HomeController@index')->name('home');
