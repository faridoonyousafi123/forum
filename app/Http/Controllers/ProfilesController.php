<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Follower;
use Session;

class ProfilesController extends Controller
{
    public function index(){

        
        return view('profiles.index')->with('users',User::all());


    }
    

    public function following($id){

        $user = User::find($id);
        
        Auth::user()->following()->attach($user);

        Session::flash('success', 'You started following ' . $user->name);

        return redirect()->back();


    }

    public function unfollowing($id){

        $user = User::find($id);
        
        Auth::user()->following()->detach($user);
        Session::flash('success', 'You started unfollowing ' . $user->name);

        return redirect()->back();


    }

    

}
