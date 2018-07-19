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
// Root Route w/o Controller
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('pages.about');
});

// EXAMPLE - Dynamic route to retrieve specific user
// Route::get('/users/{id}', function($id) {
//     return 'Welcome, User '.$id;
// });