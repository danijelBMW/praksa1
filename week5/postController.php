<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postController extends Controller
{
    public function index () {
        return view("posts.posts", ["posts" => Post::all()]);
    }

    
    public function store (request $request) {
        $userData = $request ->only(['id','title','content','likes']);
        
        if (count ($userData) > 0){
        $post=new Post();

        $post->title=$userData['title'];
        $post->content=$userData['content'];
        $post->likes=0;

        $post->save();

        return redirect('/posts');

    }
    return view ('posts.createPost');
}

public function delete($id, Request $request)
{
    $post = Post::where('id', $id)->first();
    $post->delete();
    return redirect("/posts")->with('msg', 'Post'.$post->id.'deleted');
                    
}

public function edit($id) {
    $post = Post::where('id', $id)->first();
    return view('posts.edit', compact('post'));
}
public function update($id, Request $request) {
    $saveData = $request->only(["id","title","content","likes"]);
    $post = Post::where('id', $id)->first();
    $post->title = $saveData['title'];
    $post->content = $saveData['content'];
    
    
    $post->save();
  return redirect('/posts');
}
public function like($id){
    $post= Post:: find($id)->first();
    $post->likes += 1;
    $post->save();
    return redirect('/posts');

}
}


