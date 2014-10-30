<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('id', '[0-9]+');

/**
 * root route seperti register, about, contact us
 */
Route::group([],function(){
	Route::get('/','SiteController@showIndex');
	Route::get('about','SiteController@about');
	Route::get('daftar','SiteController@showDaftar');
	Route::post('daftar',['before'=>'csrf','uses'=>'SiteController@doDaftar']);
	Route::get('login','SiteController@showLogin');
	Route::post('login',['before'=>'csrf','uses'=>'SiteController@doLogin']);
	Route::get('logout','SiteController@doLogout');
	Route::get('user','SiteController@showUser');
	Route::get('tambah-course','CourseController@showTambahCourse');
	Route::post('tambah-course','CourseController@doTambahCourse');
	Route::get('tambah-faculty','FacultyController@showTambahFaculty');
	Route::post('tambah-faculty','FacultyController@doTambahFaculty');
});

Route::group(['prefix'=>'task'],function(){
	Route::get('create','TaskController@showCreate');
	Route::get('{id}/update','TaskController@showUpdate');
	Route::get('{id}/delete','TaskController@showDelete');
	Route::get('{id}','TaskController@showView');
	Route::post('submit',['before'=>'csrf','uses'=>'TaskController@doSubmit']);
});
