<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('home');

Route::get('/blade', function () {
return view('blade');
    
});
