<?php

namespace App\Http\Controllers;

use\App\Models\Posts;
use\App\Models\Comments;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $user = auth()->user();
        $posts = Posts::all();


        return view('posts.index',compact('posts','user'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){

        $user = auth()->user();

        $validated =$request->validate([
            'title'=>'required',
            'date'=>'required',
            'author'=>'required',
            'description'=>'required',
            'tags'=>'required',
        ]);

        $posts = new posts;
        $posts->title = $request->input('title');
        $posts->date = $request->input('date');
        $posts->author = $request->input('author');
        $posts->description = $request->input('description');
        $posts->tags = $request->input('tags');
        $posts->created_by = $user->id;
        $posts->save();
        return redirect('/posts')->with('status','Post Added Successfully');
    }
    public function edit($id){
        $posts = Posts::find($id);
        return view('posts.edit',compact('posts'));
    }

    public function update(Request $request,$id)
    {
        $posts = Posts::find($id);
        $posts->title = $request->input('title');
        $posts->date = $request->input('date');
        $posts->author = $request->input('author');
        $posts->description = $request->input('description');
        $posts->tags = $request->input('tags');
        $posts->update();
        return redirect('/posts')->with('status','Post Updated Successfully');
    }

     public function delete($id){
         $posts = Posts::find($id);
         $posts->delete();
        return redirect('/posts')->with('status','Post Deleted Successfully');
    }

    public function add_comment($id){
        $posts = Posts::find($id);
        $prev_comments = Comments::where('post_id',$id)->get();
        return view('posts.add_comment',compact('posts','prev_comments'));
    }

    public function store_comment(Request $request,$id)
    {
        $user = auth()->user();
        $comments = new comments;
        $comments->comment = $request->input('comment');
        $comments->created_by = $user->id;
        $comments->post_id  = $id;
        $comments->save();
        return redirect('/posts')->with('status','Comment Added Successfully');
    }
}
