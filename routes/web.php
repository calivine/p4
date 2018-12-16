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


/*
 * Home
 */
Route::view('/', 'welcome');

/*
 * Threads
 */
Route::get('/threads/list', 'ThreadController@getList');

# CREATE new thread
Route::get('/threads/new', [
    'middleware' => 'auth',
    'uses' => 'ThreadController@new'
]);
Route::post('/create', 'ThreadController@create');

# SHOW
Route::get('/threads/{id}', 'ThreadController@displayThread')->name('viewThread');

# EDIT thread
Route::get('/threads/{id}/edit', 'ThreadController@editThread');
Route::put('/threads/{id}', 'ThreadController@updateThread');

# CREATE new comment
Route::post('/threads/{id}/comment', 'CommentController@addComment');

# EDIT comment
Route::get('/comments/{id}/edit', 'CommentController@edit');
Route::put('/comments/{id}', 'CommentController@update');

# DELETE
Route::get('comments/{id}/delete', 'CommentController@delete');
Route::delete('comments/{id}', 'CommentController@destroy');

# GET user profile
Route::get('/profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@profile'
]);

# AUTHENTICATION
Auth::routes();



