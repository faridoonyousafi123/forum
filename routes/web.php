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
    return view('auth.login');
});


Auth::routes();


Route::get('{provider}/auth',[

    'uses' => 'SocialsController@auth',
    'as' => 'social.auth'
]);

Route::get('{provider}/redirect',[

    'uses' => 'SocialsController@authCallBack',
    'as' => 'social.authCallBack'
]);


Route::get('/home', 'HomeController@index')->name('home');


// Channels for Rescource CRUD

Route::group(['middleware'=>'auth'], function(){
   
    Route::resource('channels', 'ChannelsController');

});

// Discussions 

Route::get('discussion/create',[
    'uses' => 'DiscussionsController@create',
    'as' => 'discussion.create'
]);

Route::post('discussion/store',[
    'uses' => 'DiscussionsController@store',
    'as' => 'discussion.store'
]);

Route::get('discussion/',[
    'uses' => 'DiscussionsController@index',
    'as' => 'discussion.index'
]);

Route::get('discussion/delete/{delete}',[
    'uses' => 'DiscussionsController@destroy',
    'as' => 'discussion.destroy'
]);

Route::get('discussion/{slug}',[
    'uses' => 'DiscussionsController@show',
    'as' => 'discussion.show'
]);