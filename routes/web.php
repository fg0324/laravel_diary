<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
use Illuminate\Http\Request;
use App\Models\Diary;

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


Route::get('/', 'App\Http\Controllers\DiaryControlller@index');

Route::get('/diaries/create', 'App\Http\Controllers\DiaryControlller@create');

Route::post('/diaries', 'App\Http\Controllers\DiaryControlller@store');

Route::get('/diaries/{id}/edit', 'App\Http\Controllers\DiaryControlller@edit');

Route::patch('/diaries/{id}', 'App\Http\Controllers\DiaryControlller@update');

Route::delete('/diaries/{id}', 'App\Http\Controllers\DiaryControlller@destroy');