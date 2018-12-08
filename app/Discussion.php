<?php

namespace App;

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
        return $this->belongsTo('App\Users');
    }

}


