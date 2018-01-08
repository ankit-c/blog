<?php

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

//Home Page
Route::get('/', function () {
    return view('pages.welcome');
});

//About Page
Route::get('/about', function () {
    return view('pages.about');
});

//Posts Page
Route::get('/posts', function () {
    return view('posts');
});

//Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
});

//courses
Route::get('/syllabus', function () {
    return view('pages.syllabus');
});

//Downloads Page
Route::get('/downloads', function () {
    return view('voyager./pdfs.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
