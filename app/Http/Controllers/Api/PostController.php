<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Psy\Util\Json;

class PostController extends Controller
{
    public function index() {
        $post = Post::with(['comments','author.user'])->get();
        return response()->json($post);
    }

    public function store(PostRequest $request) {
        $post = $request->all();
        Post::create($post);
        return response()->json(true);
    }
}
