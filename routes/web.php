<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/blog', [PostController::class, 'index']);

//Routes ke postingan satu per satu
Route::get('{slug}', [PostController::class, 'single']);

