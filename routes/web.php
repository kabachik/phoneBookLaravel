<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
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

Route::get('/', 'ContactsController@home')->name('home');

Route::get('/search', 'ContactsController@search')->name('search');

Route::post('/send', 'ContactsController@send');

Route::delete('/delete/{id}', 'ContactsController@delete');

Route::post('/edit/{id}', 'ContactsController@edit');

//Route::get('/xml', 'ContactsController@xml')->name();

Route::get('/sortBy/{fieldName}', 'ContactsController@sort')->name('sortBy');

Route::get('/category', 'ContactsController@category')->name('showCategory');

Route::get('/exportXML', 'ContactsController@export')->name('export');

