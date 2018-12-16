<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function discussions(){
        return $this->hasMany('App\Discussion');
        
    }
    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }
    
    public function profile(){

        return $this->hasOne('App\Profile');
    }
// users that are followed by this user
    public function following(){

        return $this->belongsToMany('App\User', 'followers', 'follower_id', 'following_id');
    }


// users that follow this user
    public function followers(){

        return $this->belongsToMany('App\User', 'followers', 'following_id', 'follower_id');
    }
}
