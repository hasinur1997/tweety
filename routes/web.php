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
    return view('welcome');
})->middleware('guest');

Auth::routes();



// Tweet
Route::middleware('auth')->group(function() {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
    Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('follow');

    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')
        ->middleware('can:edit,user');

    Route::patch(
            '/profiles/{user:username}/update', 
            'ProfileController@update'
        )
        ->middleware('can:edit,user');
    
    
        Route::get('/explore', 'ExploreController');
    
    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');
    
});

// Profiles
Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');

