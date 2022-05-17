<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('posts.posts',[
            'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post) {
        return view('posts.post',[
            'post' => $post,
        ]);
    }

    public function create() {
        return view('posts.create');
    }
}
