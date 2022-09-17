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
Route::post('add-checklist', 'App\Http\Controllers\ChecklistController@addChecklist')->name('add-checklist');
Route::get('getData', 'App\Http\Controllers\ChecklistController@getData')->name('checklist');
Route::get('get-checklist/{id}', 'App\Http\Controllers\ChecklistController@getItemChecklist')->name('get.checklist');

// Route::get('get-edit/{id}', 'App\Http\Controllers\ChecklistController@getEditChecklist')->name('get.checklist');
Route::post('update-checklist/{id}', 'App\Http\Controllers\ChecklistController@editChecklist')->name('edit.checklist');

Route::get('delete/{id}', 'App\Http\Controllers\ChecklistController@deleteChecklist')->name('delete.checklist');

Route::get('login', 'App\Http\Controllers\ChecklistController@login')->name('login');
Route::post('loginCheck', 'App\Http\Controllers\ChecklistController@loginCheck')->name('loginCheck');

