<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller72807549;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller72174435;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/72807549', [Controller72807549::class,'index']);
Route::get('/72174435', [Controller72174435::class, 'index']);


