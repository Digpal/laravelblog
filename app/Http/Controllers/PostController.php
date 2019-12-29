<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    //
    public function all_post(){
    	$posts = Post::with('category','user')->get();
    		//echo '<pre>'; 
    	//return $posts->toJson(JSON_PRETTY_PRINT);
    	//return dd($posts->toJson(JSON_PRETTY_PRINT));
    	//print("<pre>".print_r($posts,true)."</pre>");
    	//$category = Category::with('posts')->get();
    	dd($posts->toArray());
    }
}
