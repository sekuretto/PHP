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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('siteinfo');
});

Route::get('/aboutfolder', function () {
    return view('kansio/siteinfo');
});

Route::get('/contact1', 'ContactController@showinfo');
Route::get('/contact2', 'ContactController@returninfo');

Route::get('/person', 'ContactController@showperson');
Route::get('/listpersons', 'ContactController@listpersons');

/*
Route::get('/layout', function () {
    return view('layouts/app');
});
*/

Route::get('/customers', 'CustomerController@index');

Route::get('/customers/create', 'CustomerController@create');

Route::get('/customers/{id}', 'CustomerController@show');

Route::post('/customers', 'CustomerController@store');

Route::get('/customers/{id}/edit', 'CustomerController@edit');

Route::patch('/customers/{id}', 'CustomerController@update');

Route::delete('/customers/{id}', 'CustomerController@destroy');

Route::get('/testausta', 'ContactController@test')->name('test');

/*
Route::get('/search', 'ContactController@search');
*/

Route::get('/search', function () {
    return view('search');
    //redirect('https://www.google.com/search');
});

Route::get('studentjson', 'StudentController@studentjson');
Route::get('coursejson', 'StudentController@coursejson');

Route::get('student', 'StudentController@studentlist');
Route::get('course', 'StudentController@courselist');
//Route::get('studentincourses', 'StudentController@studentincourses');
Route::get('studentcredits', 'StudentController@studentcredits');
Route::get('coursecredits', 'StudentController@coursecredits');

Route::get('/studentform', 'StudentController@studentform');
Route::post('/storestudent','StudentController@store');