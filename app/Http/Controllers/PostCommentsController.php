<?php

namespace App\Http\Controllers;

use App\Models\PostComments;
use App\Http\Requests\PostCommmentsRequest;

class PostCommentsController extends Controller
{
    public function store(PostCommmentsRequest $request)
    {
        $postComment = $request->all();
        PostComments::create($postComment);
        return redirect(route('post.show', request('post_id')));
    }
}
