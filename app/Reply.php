<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['user_id', 'content', 'discussion_id'];

    public function discussion(){
        return $this->belongsTo('App\Discussion');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
