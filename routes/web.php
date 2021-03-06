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


// EXAMPLE - Routes w/o Controller
    // Route::get('/', function () {
    //     return view('welcome');
    // });
    // Route::get('/about', function () {
    //     return view('pages.about');
    // });
Route::get('/', 'PagesController@index');  
Route::get('/about', 'PagesController@about');  
Route::get('/services', 'PagesController@services');  

Route::resource('posts', 'PostsController');



// EXAMPLE - Dynamic route to retrieve specific user
// Route::get('/users/{id}', function($id) {
//     return 'Welcome, User '.$id;
// });
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
