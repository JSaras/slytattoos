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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/contact', 'PagesController@contact');


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

// Route::get('/users/{id}/{name}', function ($id, $name){
//     return 'This is user '.$name.' with an id of '.$id;
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');
