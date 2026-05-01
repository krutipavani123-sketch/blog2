<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\bloglistcontroller;
use App\Http\Controllers\editcontroller;
use App\Http\Controllers\logincontroller;


// Route::get('welcome', function () {
//     return view('welcome');
// });

// To show the form

Route::view('/', 'login');
Route::post('login', [logincontroller::class, 'login']);

// To handle the form submission
Route::post('login', [logincontroller::class, 'login']);
Route::get('welcome', [bloglistcontroller::class, 'list']);

Route::get('delete/{id}', [bloglistcontroller::class, 'delete']);

Route::get('list', [bloglistcontroller::class, 'list']);
Route::get('edit/{id}', [bloglistcontroller::class, 'edit']);
Route::put('edit/{id}', [bloglistcontroller::class, 'update']);
Route::get('search', [bloglistcontroller::class, 'search']);


// Route::post('login', [logincontroller::class, 'login']);
// Route::post('welcome', [bloglistcontroller::class, 'list']);
//Route::get('welcome', [welcomecontroller::class, 'addblog']);
/*Route::post('bloglist', [bloglistcontroller::class, 'bloglist']);
Route::get('list', [bloglistcontroller::class, 'list']);

Route::get('delete/{id}', [bloglistcontroller::class, 'delete']);


Route::get('edit/{id}', [bloglistcontroller::class, 'edit']);
Route::put('edit/{id}', [bloglistcontroller::class, 'update']);

Route::view('/', 'login');
Route::post('/', [logincontroller::class, 'login']);
Route::post('welcome', [bloglistcontroller::class, 'list']);

Route::view('welcome', 'welcome');

Route::get('search', [bloglistcontroller::class, 'search']);

//Route::view('welcome', 'welcome');

//Route::post('', [logincontroller::class, 'login']);*/
