<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

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

    public function store() {
       
            $attributes = request()->validate([
                'title'         => 'required',
                // 'thumbnail'     => ['required','image'],
                'slug'         => ['required',Rule::unique('posts','slug')],
                'excerpt'       => 'required',
                'body'          => 'required',
                'category_id'   => ['required',Rule::exists('categories','id')]
            ]);
            $attributes['user_id'] = auth()->id();
            // $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
            Post::create($attributes);
        // return redirect('/')->with('success','Post has been created');
        // $input = request()->all();
          
        // Log::info($input);
     
        return response()->json(['success','Successfully submited form']);

    }
}
