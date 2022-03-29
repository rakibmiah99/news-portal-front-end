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

Route::get('/', function () {
    return view('Pages.HomePage');
});

Route::get('/Category', function () {
    return view('Pages.CategoryPage');
});

Route::get('/Archive', function () {
    return view('Pages.ArchivePage');
});

Route::get('/test', function () {
    return view('Welcome');
});
