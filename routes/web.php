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
    return view('front.index');
});


Route::get('index', 'PostController@index')->name('index');
Route::get('posts/create', 'PostController@create')->name('create.post');
Route::post('posts/store', 'PostController@store');
Route::delete('{post:slug}/delete', 'PostController@destroy');


// Read Category
Route::get('category', 'CategoryController@index')->name('category');
Route::prefix('category')->group(function ()
{
    // Create Category
    Route::get('create', 'CategoryController@create')->name('create.category');
    Route::post('store', 'CategoryController@store');
    
    // Edit Category
    Route::get('{category:slug}/edit', 'CategoryController@edit')->name('category.edit');
    Route::patch('{category:slug}/edit', 'CategoryController@update');
    
    // Delete Category
    Route::delete('{category:slug}/delete', 'CategoryController@destroy');
});

// Create Tag
Route::get('tags/create', 'TagController@create')->name('create.tags');
Route::post('tags/store', 'TagController@store');

// Edit Tag
Route::get('tags/{tag:slug}/edit', 'TagController@edit')->name('edit.tags');
Route::patch('tags/{tag:slug}/edit', 'TagController@update');

// Delete Tag
Route::delete('tags/{tag:slug}/delete', 'TagController@destroy');

// Read Tag
Route::get('tags', 'TagController@index')->name('tags');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
