<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');

Route::get('/welcome', function() {   
     return view('welcome'); // will return app/views/index.php 
 });

Route::get('/todo', function(){
	return view('index');
});
// API ROUTES Todo ========================
Route::group(array('prefix' => 'todoapi'), function(){
	Route::resource('todos', 'TodoController', 
		array('only' => array('index','store','destroy','edit','update')));
});
// API ROUTES ==================================  
Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));
  
});

Route::get('/admin/product/new', 'ProductController@newProduct');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');
Route::post('/admin/product/save', 'ProductController@add');

Route::get('map','ItemsController@map');

// CATCH ALL ROUTE =============================  
// all routes that are not home or api will be redirected to the frontend 
// this allows angular to route them 
// App::missing(function($exception) { 
//     return View::make('welcome'); 
// });
