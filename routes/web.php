<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\bloglistcontroller;
use App\Http\Controllers\editcontroller;



Route::get('welcome', function () {
    return view('welcome');
});

//Route::get('welcome', [welcomecontroller::class, 'addblog']);
Route::post('bloglist', [bloglistcontroller::class, 'bloglist']);
Route::get('list', [bloglistcontroller::class, 'list']);

Route::get('delete/{id}', [bloglistcontroller::class, 'deletedata']);
Route::get('edit/{id}', [bloglistcontroller::class, 'edit']);
Route::get('update/{id}', [bloglistcontroller::class, 'updatedata']);
