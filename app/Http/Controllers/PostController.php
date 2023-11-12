<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(PostRequest $request) {
        $post = $request->all();
        $post['author_id'] = Auth::user()->author->id;
        Post::create($post);
        return redirect(route('dashboard'));
    }
}
