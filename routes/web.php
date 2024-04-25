<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', [
        'name' => 'Naufal'
        ,'hal' => 'halaman home'
    ]);
});

Route::get('/about', function () {
    return view('about', ['hal' => 'halaman about',
                            'name' => 'Naufal'
    ]);
});


//route menuju blog

Route::get('/blog', function () {
    return view('posts', [
        'hal' => "halaman post",
        'name' => 'Naufal',
        'post' => Post::getAll()
    ]);
});

//Routes ke postingan satu per satu
Route::get('{slug}', function ($slug) {

    return view('singlePost', ['hal' => 'halaman posting tunggal',
    'name' => 'Naufal',
    'data' => Post::getSingle($slug)
]);
});

