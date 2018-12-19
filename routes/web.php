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
    Route::get('discussion/create',[
        'uses' => 'DiscussionsController@create',
        'as' => 'discussion.create'
    ]);
    // Discussions 
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
    
    Route::get('discussion/edit/{id}',[
        'uses' => 'DiscussionsController@edit',
        'as' => 'discussion.edit'
    ]);
    
    Route::post('discussion/update/{id}',[
        'uses' => 'DiscussionsController@update',
        'as' => 'discussion.update'
    ]);
    
    Route::post('discussion/reply/{id}',[
        'uses' => 'DiscussionsController@reply',
        'as' => 'discussion.reply'
    ]);
    
    //likes
    
    Route::post('discussions/{id}',[
        'uses' => 'LikeController@create',
        'as' => 'like.create'
    ]);
    
    Route::post('discussions/dislike/{id}',[
        'uses' => 'LikeController@dislike',
        'as' => 'like.dislike'
    ]);

    //Auth::user Profile

    Route::get('profile/{slug}',[
        'uses' => 'ProfilesController@index',
        'as' => 'profile.index'
    ]);

    //user profile

    Route::get('profile/user/{slug}',[
        'uses' => 'ProfilesController@userProfile',
        'as' => 'profile.user'
    ]);

    //Following and followers

    Route::get('profile/follow/{id}',[
        'uses' => 'ProfilesController@following',
        'as' => 'user.follow'
    ]);

    Route::get('profile/unfollow/{id}',[
        'uses' => 'ProfilesController@unfollowing',
        'as' => 'user.unfollow'
    ]);
       
       
    

});



