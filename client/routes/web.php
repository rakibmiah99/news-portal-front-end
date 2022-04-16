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

Route::get('/Category/National', function () {
    return view('Pages.CategoryPage');
});

Route::get('/LocalNews', function (){
    return view('Pages.LocalNewsPage');
});
Route::get('/get-trending-news/{id}', function (){
    return view('Pages.TrendingPage');
});

Route::get('/Archive', function () {
    return view('Pages.ArchivePage');
});

Route::get('/we', function (){
    return view('Pages.WePage');
});
Route::get('/SingleNews', function (){
    return view('Pages.SingleNewsPage');
});

Route::get('/get-news/{NewsID}', function () {
    return view('Pages.SingleNewsPage');
});

Route::get('/get-news-by-category/{CategoryId}/{SubCategoryId?}', function () {
    return view('Pages.CategoryPage');
});
Route::get('/get-news-by-sub-category/{SubCategoryId}', function () {
    return view('Pages.SubCategoryPage');
});
