<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post): View
    {
        return View('posts.show', [
            'post' => $post,
        ]);
    }

    public function store(PostRequest $request)
    {
        $post = $request->all();
        $post['author_id'] = Auth::user()->author->id;
        Post::create($post);
        return redirect(route('dashboard'));
    }
}
