<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Discussion;
class DiscussionsController extends Controller
{
    public function index(){
        return view('discussions.index')->with('discussions',Discussion::all());
    }
    public function create(){
        return view('discussions.create');
    }

    public function store(Request $request){

        $this->validate($request,[

            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required'

        ]);

        $discussion = Discussion::create([

            'title' => $request->title,
            'content' => $request->content,
            'channel_id' => $request->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug($request->title)


        ]);

        Session::flash('success', 'Discussion created Successfully!');

        return redirect()->route('discussion.index',['slug'=> $discussion->slug]);
    }
}
