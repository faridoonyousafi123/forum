<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Like;
use Auth;
class LikeController extends Controller
{
    public function create($id){

        $discussion = Discussion::find($id);

        Like::create([
            'user_id' => Auth::id(),
            'discussion_id' => $discussion->id,

        ]);

        return redirect()->back();
    }

    public function dislike($id){

        $discussion = Discussion::find($id);
        $user = Auth::id();
        $deletedRows = Like::where('user_id',$user)->where('discussion_id',$discussion->id)->delete();

        return redirect()->back();
    }
}
