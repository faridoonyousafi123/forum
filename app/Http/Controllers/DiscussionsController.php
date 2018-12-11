<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Users;
use App\Discussion;
use App\Channel;
use App\Reply;

class DiscussionsController extends Controller
{
    public function index(){
        $discussions = Discussion::orderBy('created_at','desc')->paginate(4);
        return view('discussions.index',['discussions' => $discussions]);
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
    public function destroy($id){

        Discussion::destroy($id);

        Session::flash('success','Discussion deteled successfully!');

        return redirect()->back();
    }

    public function edit($id){
        
        
        return view('discussions.edit',['discussion_new' => Discussion::find($id)]);

    }
    public function update(Request $request, $id){
        
        $discussion = Discussion::find($id);

        $this->validate($request, [

            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required'

        ]);

        
        $discussion->title = $request->title;
        $discussion->content = $request->content;
        $discussion->channel_id = $request->channel_id;
        $discussion->user_id = Auth::id();
        $discussion->slug = str_slug($request->title);

        $discussion->save();

        Session::flash('success', 'Discussion updated Successfully!');

        return redirect()->route('discussion.index');



    }

    public function show($slug){

        
        $discussion = Discussion::where('slug',$slug)->first();
        $replies = Reply::where('discussion_id',$discussion->id);

     
     
        return view('discussions.show',[
            'discussion'=> $discussion,
            'replies' => $replies
        
        
        ]);

    
    }

    public function reply($id){

            $discussion = Discussion::find($id);

            $reply = Reply::create([

                'user_id' => Auth::id(),
                'discussion_id' => $id,
                'content' => request()->content
            ]);

            return redirect()->back();
    }
}
