<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Traits\Resizable;
use App\Post;
use MetaTag;
class BlogControllerBahmut extends Controller
{
    public function postBahmut()
    {
        MetaTag::set('title','Блог');
        MetaTag::set('description','Информация');
        $postsbahmut = Post::all();
        return view('bahmut.blog.blog', compact('postsbahmut'));
    }
}
