<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IndexController extends Controller
{

    public function index(): View
    {

        $posts = Post::orderby('title')->get();

        return view("index", [
            "posts" => $posts
        ]);
    }

    public function show(int $id): View
    {
        $post = Post::findorFail($id);

        return view("show", [
            'post' => $post
        ]);
    }

    public function create(): View
    {
        return view("create");
    }

    public function store(Request $request)
    {


        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return Redirect::route("index");
        
    }

    public function contact(): view
    {
        return view("contact");
    }
}
