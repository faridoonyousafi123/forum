<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['title', 'content', 'channel_id','user_id','slug'];

    public function channel(){
        return $this->belongsTo('App\Channel');
    }

    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

   
    public function is_liked_by_auth_user(){

        $id = Auth::id();
        
        $likers = array();

        foreach ($this->likes as $like) {
            
            array_push($likers, $like->user_id );
        }

    if(in_array($id, $likers))
    {
        return true;
    }
    else{

        return false;
    }

    }
}


