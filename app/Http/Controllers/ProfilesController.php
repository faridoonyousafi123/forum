<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Follower;

class ProfilesController extends Controller
{
    public function index(){

        
        return view('profiles.index')->with('users',User::all());


    }
    

    public function following($id){

        $user = User::find($id);
        
        Auth::user()->following()->attach($user);

        return redirect()->back();


    }

    

}
