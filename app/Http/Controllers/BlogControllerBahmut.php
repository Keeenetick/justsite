<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Traits\Resizable;
use App\Post;
class BlogControllerBahmut extends Controller
{
    public function postBahmut()
    {
        $postsbahmut = Post::all();
        return view('bahmut.blog.blog', compact('postsbahmut'));
    }
}
