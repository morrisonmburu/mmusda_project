<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{


	public function getIndex(){
		$posts = Post::paginate(10);

		return view('blog.index')->withPosts($posts);
	}

    public function readmore($id){

        $post = Post::find($id);

        return view('blog.readmore')->withPost($post);
    }

    public function getSingle($slug){
    	//fetch from the DB based on slug

    	$post = Post::where('slug', '=', $slug)->first();

    	// return the view and pass in the post object
    	return view('blog.single')->withPost($post);
    }
}
