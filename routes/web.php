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
Route::get('/', 'ThreadController@welcomeThreads');

Route::group(['middleware' => 'auth'], function () {

    # CREATE new thread
    Route::get('/threads/new', 'ThreadController@new');
    Route::post('/create', 'ThreadController@create');

    # EDIT thread
    Route::get('/threads/{id}/edit', 'ThreadController@editThread');
    Route::put('/threads/{id}', 'ThreadController@updateThread');

    # DELETE thread
    Route::get('/threads/{id}/delete', 'ThreadController@delete');
    Route::delete('threads/{id}', 'ThreadController@destroy');

    # CREATE new comment
    Route::post('/threads/{id}/comment', 'CommentController@addComment');

    # EDIT comment
    Route::get('/comments/{id}/edit', 'CommentController@edit');
    Route::put('/comments/{id}', 'CommentController@update');

    # DELETE comment
    Route::get('comments/{id}/delete', 'CommentController@delete');
    Route::delete('comments/{id}', 'CommentController@destroy');
});

/*
 * Thread Index
 */
Route::get('/threads/list', 'ThreadController@getList');

# SEARCH threads
Route::get('/search-threads', 'ThreadController@searchProcess');

# SHOW thread
Route::get('/threads/{id}', 'ThreadController@displayThread')->name('viewThread');

# AUTHENTICATION
Auth::routes();


