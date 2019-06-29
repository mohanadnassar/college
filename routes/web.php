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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', array('uses' => 'HomeController@showLogin'));

Route::post('/login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/logout', array('uses' => 'HomeController@doLogout'));


//The admin is defined in the database by making the admin value =1;
Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/routes', 'HomeController@admin');
    Route::get('/create/course','CourseController@create');
    Route::post('/create/course','CourseController@store');
    Route::get('/courses', 'CourseController@index');
    Route::get('/edit/course/{id}','CourseController@edit');
    Route::post('/edit/course/{id}','CourseController@update');
    Route::delete('/delete/course/{id}','CourseController@destroy');
});

Route::get('/create/application','ApplicationController@create');

Route::post('/create/application','ApplicationController@store');

Route::get('/applications', 'ApplicationController@index');

Route::get('/edit/application/{id}','ApplicationController@edit');

Route::post('/edit/application/{id}','ApplicationController@update');

Route::delete('/delete/application/{id}','ApplicationController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');
