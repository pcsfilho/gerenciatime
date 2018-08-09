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
//Admin routes
//Route::group(['namespace' => 'Admin', 'middleware'=>'auth:admin'], function(){
Route::group(['namespace' => 'Admin'], function(){
	/////////////
    ////Admin////
    ////////////
    Route::get('/admin','AdminController@index')->name('admin.list');
    Route::get('/admin/create','AdminController@create')->name('admin.create');
    Route::get('/admin/{admin}/edit','AdminController@edit')->name('admin.edit');
    Route::post('/admin/store','AdminController@store')->name('admin.store');
    Route::delete('admin/{admin}','AdminController@destroy')->name('admin.destroy');
    Route::put('admin/{admin}','AdminController@update')->name('admin.update');
    /////////////
    //Employee//
    ////////////
    Route::get('/admin/employees','EmployeeController@index')->name('employee.list');
    Route::get('/admin/employees/create','EmployeeController@create')->name('employee.create');
    Route::get('/admin/employees/{employer}/edit','EmployeeController@edit')->name('employee.edit');
    Route::put('admin/employees/{employee}','EmployeerController@update')->name('employee.update');
    Route::post('/admin/employees/store','EmployeeController@store')->name('employee.store');
    Route::delete('admin/employees/{employee}','EmployeeController@destroy')->name('employee.destroy');
    Route::get('/admin/employees/{employee}/registers','TimeController@registersByUser')->name('employee.register.list');
    /////////////
    //Registers//
    ////////////
    Route::get('/admin/registers','TimeController@index')->name('register.list');

});

Route::group(['namespace' => 'User'], function(){
	Route::get('/','HomeController@index')->name('home');
	Route::post('/store','HomeController@storetimer')->name('home.store');
	Route::post('user/time/{user_id}', 'HomeController@method');
});
