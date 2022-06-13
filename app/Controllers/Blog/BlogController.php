<?php

namespace App\Controllers\Blog;

use App\Controllers\BaseController;
use App\Models\Post;

class BlogController extends BaseController
{

    public function listAction()
    {
        $posts = Post::all();
        $total = $posts->count();
        return view('blog/index', compact('posts', 'total'));
    }

    public function detailAction($id)
    {
        $post = Post::where('id', $id)->first();
        return view('blog/detail', compact('post'));
    }
}