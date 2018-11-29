<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Traits\Resizable;
use App\Post;
class BlogController extends Controller
{
    public function post()
    {
        $posts = Post::all();
        return view('blog.blog', compact('posts'));
    }
}
