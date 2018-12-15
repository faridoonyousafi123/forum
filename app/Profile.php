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

}
