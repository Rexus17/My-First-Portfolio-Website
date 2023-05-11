<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est quaerat, quibusdam consequatur in dignissimos illo exercitationem, laudantium rem quis quas nulla! Similique repellat itaque at laborum quam vero sint excepturi.",
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est quaerat, quibusdam consequatur in dignissimos illo exercitationem, laudantium rem quis quas nulla! Similique repellat itaque at laborum quam vero sint excepturi."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
