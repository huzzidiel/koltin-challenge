<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function show(Author $author): View{
        return View('authors.show', [
            'author' => $author
        ]);
    }
}
