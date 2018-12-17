<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'facebook',
        'twitter',
        'github',
        'about',
        'company',
        'title'
    ];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function is_followed_by_auth_user(){

        $id = Auth::id();
        
        $following = array();

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
