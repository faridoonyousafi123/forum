<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug'
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


    public function is_followed_by_auth_user(){

        $id = Auth::id();
        
        $followers = array();

        foreach ($this->followers as $follower) {
            
            array_push($followers, $follower->id );
        }

    if(in_array($id, $followers))
    {
        return true;
    }
    else{

        return false;
    }

    }
    

}
