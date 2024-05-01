<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index() {
        return view('posts', [
            'hal' => "halaman post",
            'name' => 'Naufal',
            'post' => Post::all()
        ]);
    }

    function single($slug) {
        return view('singlePost', ['hal' => 'halaman posting tunggal',
        'name' => 'Naufal',
        'data' => Post::find($slug)
]);
    }
}
