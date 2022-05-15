<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post) {
        $post->comments()->create([
            'body'  => request()->body, //request('body)
            'user_id'   => auth()->id()
        ]);
        return back();
    }
}
