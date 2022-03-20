<?php

namespace App\Http\Controllers;
use\App\Models\Posts;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $posts = Posts::all();

        return view('welcome',compact('posts'));
    }
    public function view($id){
        $posts = Posts::find($id);
        return view('view',compact('posts'));
    }
}
