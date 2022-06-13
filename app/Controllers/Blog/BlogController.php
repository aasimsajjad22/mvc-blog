<?php

namespace App\Controllers\Blog;

class BlogController
{
    public function listAction()
    {
        return view('blog/index', ['name' => 'Aasim']);
    }
}