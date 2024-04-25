<?php

namespace App\Models;


class Post 
{
    private static $posts = [
        [
            "judul" => "Cartel wanted",
            "slug" => "cartel-wanted",
            "penulis" => "Pollos",
            "isi" => "3 years ago I decided to be a Golang developer. At that moment I was a senior PHP developer and changed my stack to Golang. And become"
        ],

        [
            "judul" => "Heisenberg",
            "slug" => "heisenberg",
            "penulis" => "Jessie Pinkman",
            "isi" => "As a PHP developer, the tools you choose can make all the difference in your workflow and productivity. "
        ]
    ] ;

    static function getAll() {
        return collect(self::$posts);
    }

    static function getSingle($slug) {
        $single_post = static::getAll();
        return $single_post->firstWhere('slug', $slug);
      
    }
    
}
