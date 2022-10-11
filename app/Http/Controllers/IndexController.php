<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\View\View;

class IndexController extends Controller
{

    public function index(): View
    {

        $posts = Post::all();

        return view("index", [
            "posts" => $posts
        ]);
    }

    public function show(int $id): View
    {
        $post = Post::where('id', $id)->first();

        return view("show", [
            'post' => $post
        ]);
    }

    public function contact():view
    {
        return view("contact");
    }
}
