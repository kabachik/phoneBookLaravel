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

Route::get('/', 'EmployeeController@home')->name('/');

Route::post('/send', 'EmployeeController@send');

Route::delete('/delete/{id}', 'EmployeeController@delete');

Route::post('/edit/{id}', 'EmployeeController@edit');


