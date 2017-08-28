<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index() {
        $posts = Post::where(['status' => 'PUBLISHED'])->orderByDesc('created_at')->paginate(10);

        return $posts;
    }

    public function view($slug) {
        return $slug;
    }
}
