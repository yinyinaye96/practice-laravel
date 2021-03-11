<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => "my first page",
            'my-second-post' => "my second page"
        ];
        if (!array_key_exists($post, $posts)) {
            abort(404, "There are not found");
        }
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
