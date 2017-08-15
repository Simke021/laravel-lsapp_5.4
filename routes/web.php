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

Route::get('/', function () {
    // return view('welcome');
    return 'Hello World';
});

// Route::get('/hello', function () {
//     // return view('welcome');
//     return "<h1>About</h1>";
// });

// Route::get('/users/{id}/{name}', function ($id, $name){
//     return 'This is user '.$name.', with an id of '.$id. '!';
// });

// Route::get('/about', function (){
//     return view('pages.about');
// });

// Route::get('/services', function (){
//     return view('pages.services');
// });

Route::get('/', 'PagesControler@index');
Route::get('/about', 'PagesControler@about');
Route::get('/services', 'PagesControler@services');

Route::resource('posts', 'PostControler');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
