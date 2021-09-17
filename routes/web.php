<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', 'EmployeeController@home')->name('home');

Route::get('/search', 'EmployeeController@search')->name('search');

Route::post('/send', 'EmployeeController@send');

Route::delete('/delete/{id}', 'EmployeeController@delete');

Route::post('/edit/{id}', 'EmployeeController@edit');

//Route::get('/xml', 'EmployeeController@xml')->name();

Route::get('/sortBy/{fieldName}', 'EmployeeController@sort')->name('sortBy');

