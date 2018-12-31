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

    public function userProfileEdit($slug){

        $user1 = User::where('slug',$slug)->first();

        // dd($user1);

         return view('profiles.edit',['user' => $user1]);

    }

    public function userProfileSet($slug){


        return view ('profiles.set');
    }

    public function update(Request $request){

        $this->validate($request,[

            'name'=>'required',
            'email'=>'required|email',
            // 'facebook'=>'required',
            // 'youtube'=>'required'

        ]);

        $user=Auth::user();

        if($request->hasFile('avatar'))
        {
            $avatar=$request->avatar;

            $avatar_new_name=time().$avatar->getClientOriginalName();

            $avatar->move('avatars/',$avatar_new_name);

            $user->avatar='avatars/'.$avatar_new_name;

            $user->save();

        }

        $user->name=$request->name;
        $user->email=$request->email;
        $user->profile->facebook=$request->facebook;
        $user->profile->twitter=$request->twitter;
        $user->profile->github=$request->github;
        $user->profile->city=$request->city;
        $user->profile->about=$request->about;
        $user->profile->company=$request->company;
        $user->profile->title=$request->title;



        

        if($request->filled('password'))
        {

            $user->password=bcrypt($request->password);
            $user->save();
        }
        $user->save();
        $user->profile->save();

        Session::flash('success','Profile successfully updated');

        return redirect()->back();
    

    }

    
    

}
