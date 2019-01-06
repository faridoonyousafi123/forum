<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatEvent;

class ChatsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        return view('chatroom.index');
    }

    // public function send(request $request){

    //     $user = User::find(Auth::id());
    //     event( new ChatEvent($request->message,$user));
        
    // }

    public function send(){

        $message = "hello ";
        $user = User::find(Auth::id());
        event( new ChatEvent($message,$user));
        
    }
}
