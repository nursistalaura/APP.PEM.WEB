<?php

namespace App\Http\Controllers;

use App\Models\Post; //import model "post"
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->paginate(5); //menampilkan data terbaru dibatasi hanya 5 satu page
        
        return view('posts.index', compact('posts')); //render view with post

    }
    
}
