<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    function Index(){

        $posts = Post::all();
        // echo "<pre>";
            // print_r($posts);
            // print_r(compact('posts'));
        // echo "</pre>";
        return \view('post.index',compact('posts'));
    }
    function getCreatePage(){

        return \view('post.create');
    }
    function createPost(Request $req){

        $post = new Post;
        $post->title = $req->title;
        $post->body = $req->body;
        $post->author = $req->author;

        $post->save();
        
        return \redirect('/posts')->with('success','Alhamdulla wow! post is created');

    }
    function getUpdatePage($id){

        // $post = Post::find($id); they are same
        $post = Post::where('id',$id)->first();
        return \view('post.update',compact('post'));
    }
    function updatePost(Request $req){

        // $post = Post::where('id',$id)->update($newpost);
        $post = Post::where('id',$req->id)->first();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->author = $req->author;

        $post->save();
        
        return \redirect('/posts')->with('success','deleted');
    }
    function deletePost($id){
        $post = Post::where('id',$id)->delete();
        return \redirect('/posts')->with('success','deleted');
    }
    function showPost($id){
        $post = Post::find($id);
        return \view('post.show',['post'=>$post]);
    }
}
