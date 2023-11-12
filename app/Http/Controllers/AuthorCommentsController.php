<?php

namespace App\Http\Controllers;

use App\Models\AuthorComments;
use App\Http\Requests\AuthorCommmentsRequest;
use Illuminate\Routing\Redirector;

class AuthorCommentsController extends Controller
{

    public function store(AuthorCommmentsRequest $request)
    {
        $authorComment = $request->all();
        AuthorComments::create($authorComment);
        return redirect(route('author.show', request('author_id')));
    }
}
