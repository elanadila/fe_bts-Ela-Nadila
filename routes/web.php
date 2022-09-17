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

Route::get('/', 'App\Http\Controllers\ChecklistController@index')->name('home');
Route::get('welcome', 'App\Http\Controllers\ChecklistController@welcome')->name('welcome');

Route::get('home', 'App\Http\Controllers\ChecklistController@index')->name('home');
Route::post('add-cheklist', 'App\Http\Controllers\ChecklistController@addChecklist')->name('add-cheklist');
Route::get('getData', 'App\Http\Controllers\ChecklistController@getData')->name('checklist');
Route::get('get-cheklist/{id}', 'App\Http\Controllers\ChecklistController@getItemCheklist')->name('get.cheklist');

Route::get('get-edit/{id}', 'App\Http\Controllers\ChecklistController@getEditCheklist')->name('get.edit');
Route::post('update-cheklist/{id}', 'App\Http\Controllers\ChecklistController@editCheklist')->name('edit.cheklist');

Route::get('delete/{id}', 'App\Http\Controllers\ChecklistController@deleteCheklist')->name('delete.cheklist');

Route::get('login', 'App\Http\Controllers\ChecklistController@login')->name('login');
Route::post('loginCheck', 'App\Http\Controllers\ChecklistController@loginCheck')->name('login.check');

