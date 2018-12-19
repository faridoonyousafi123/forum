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

        $users = User::orderBy('created_at','desc')->paginate(6);
        return view('profiles.index')->with('users', $users);
       


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

    public function userProfile($slug){

        $user1 = User::where('slug',$slug)->first();

        // dd($user1);

         return view('profiles.user',['user' => $user1]);
    }

    

}
