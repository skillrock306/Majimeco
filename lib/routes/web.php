<?php

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

Route::get('/', 'FrontendController@getHome');
Route::get('/about', 'FrontendController@getAbout');
Route::get('/contact', 'FrontendController@getContact');
Route::get('/complete', 'FrontendController@getComplete');
Route::post('/contact','FrontendController@postContact');
Route::get('/search','FrontendController@getSearch');
Route::get('detail/{id}/{slug}.html','FrontendController@getDetail');
Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
 		});
		Route::get('logout','HomeController@getLogout');

		Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
			Route::get('home','HomeController@getHome');

			Route::group(['prefix'=>'category'], function(){
				Route::get('/','CategoryController@getCate');

				Route::get('/add','CategoryController@getAddCate');
				Route::post('/add','CategoryController@postAddCate');

				Route::get('edit/{id}','CategoryController@getEditCate');
				Route::post('edit/{id}','CategoryController@postEditCate');

				Route::get('delete/{id}','CategoryController@getDeleteCate');
			});

			Route::group(['prefix'=>'new'], function(){
				Route::get('/','NewController@getNew');

				Route::get('/add','NewController@getAddNew');
				Route::post('/add','NewController@postAddNew');

				Route::get('edit/{id}','NewController@getEditNew');
				Route::post('edit/{id}','NewController@postEditNew');

				Route::get('detail/{id}','NewController@getDetailNew');

				Route::get('delete/{id}','NewController@getDeleteNew');
				Route::get('/search','NewController@getSearch');
			});
			Route::group(['prefix'=>'user'], function(){
				Route::get('/','UserController@getUser');

				Route::get('/add','UserController@getAddUser');
				Route::post('/add','UserController@postAddUser');

				Route::get('edit/{id}','UserController@getEditUser');
				Route::post('edit/{id}','UserController@postEditUser');

				Route::get('delete/{id}','UserController@getDeleteUser');
			});
			Route::group(['prefix'=>'slide'], function(){
				Route::get('/','SlideController@getSlide');

				Route::get('/add','SlideController@getAddSlide');
				Route::post('/add','SlideController@postAddSlide');

				Route::get('edit/{id}','SlideController@getEditSlide');
				Route::post('edit/{id}','SlideController@postEditSlide');

				Route::get('delete/{id}','SlideController@getDeleteSlide');
			});
	});
});