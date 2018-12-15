<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Traits\Resizable;
use App\Post;
use MetaTag;
class BlogController extends Controller
{
    public function post()
    {
        $posts = Post::all();
        MetaTag::set('title', 'Блог');
        MetaTag::set('description', 'Информация');
        return view('blog.blog', compact('posts'));
    }
}
