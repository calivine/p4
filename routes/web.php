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
 *  Test route for database
 */
Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

/*
 * Home
 */
Route::view('/', 'welcome');

/*
 * Threads
 */
Route::get('/threads/list', 'ThreadController@getList');

# CREATE new thread
# Route::get('/threads/new', 'ThreadController@new');
Route::get('/threads/new', [
    'middleware' => 'auth',
    'uses' => 'ThreadController@new'
]);
Route::post('/create', 'ThreadController@create');

# SHOW
Route::get('/threads/{id}', 'ThreadController@displayThread')->name('viewThread');

# CREATE new comment
Route::post('/threads/{id}/comment', 'CommentController@addComment');

# EDIT
Route::get('/comments/{id}/edit', 'CommentController@edit');
Route::put('/comments/{id}', 'CommentController@update');

# DELETE
Route::get('comments/{id}/delete', 'CommentController@delete');
Route::delete('comments/{id}', 'CommentController@destroy');

# AUTHENTICATION
Auth::routes();

# Test login
Route::get('/show-login-status', function() {
    $user = Auth::user();

    if ($user) {
        dump('You are logged in.', $user->toArray());
    } else {
        dump('You are not logged in.');
    }
    return;
});


