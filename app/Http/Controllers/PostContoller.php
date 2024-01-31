<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

use function PHPUnit\Framework\isNull;

class PostContoller extends Controller
{
    public function index()
    {
        $postFromDB = Post::all();

        return view('posts.index', ['posts' => $postFromDB]);
    }

    public function show($id)
    {
        $singlePostFromDB = Post::find($id);

        if (is_null($singlePostFromDB)) {
            return redirect()->route('posts.index');
        }
        
        return view('posts.show', ['post' => $singlePostFromDB]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('content');
       
        $post->save();

        return redirect()->route('posts.index');
    }

    public function update($id)
    {

        $title = request('title');
        $body = request('content');
        

        $post = Post::find($id);

        $post->title = $title;
        $post->body = $body;
       

        $post->save();

        return redirect()->route('posts.index', $id);
    }



    public function edit($id)
    {
        $post = Post::find($id);

        if (is_null($post)) {
            return redirect()->route('posts.index');
        }

        return view('posts.edit', ['post' => $post]);
    }


    public function destroy($id)
    {
        $post = Post::find($id);
    
        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }
    
        $post->delete();
    
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }


} 
    
    

   





   


    





