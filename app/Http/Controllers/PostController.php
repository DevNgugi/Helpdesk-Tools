<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::with('getUserRelation')->orderBy('id', 'DESC')->paginate(10);
        return view('home',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addpost');
       
    }
    public function edit($id)
    {
        //
        $post=Post::find($id);
    
        return view('editpost',['post'=>$post]);
      
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Post::create([
                'title' => $request->title,
                'body' => $request->body,
                'user_id'=>Auth::User()->id
            ]);
            return redirect()->route('home')->with('post_added', 'Post Saved successfully');
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th->getMessage());
            return redirect()->route('home')->with('post_not_added', $th->getMessage());

        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $post=Post::find($id);
        
        $comments = Comment::where('post_id', $id)->with('getCommentRelation')->get();

        return view('postdetails',['post'=>$post,'comments'=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function search(Request $request)
    {
        $posts=Post::where('body', 'LIKE', '%'.$request->search.'%')->orwhere('title', 'LIKE', '%'.$request->search.'%')->with('getUserRelation')->paginate(10);
        return view('home',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $post=Post::find($request->id);
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();          
            return redirect()->route('show',[$request->id]);
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th->getMessage());
            // return redirect()->route('home')->with('post_not_added', $th->getMessage());
            return redirect()->route('show',[$request->id]);

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
