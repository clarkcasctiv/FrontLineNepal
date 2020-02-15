<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(10);
        // $results = Medicine::paginate(10);
        // //all();
    	 return view('user.user', compact('posts'));
    }
}
