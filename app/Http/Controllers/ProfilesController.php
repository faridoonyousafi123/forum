<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfilesController extends Controller
{
    public function index(){

        return view('profiles.index');
    }
    public function create(Request $request){


    }
    public function edit($id){

    }
    public function delete($id){
        
    }

}
