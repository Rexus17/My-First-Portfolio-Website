<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Ahmad Rifai",
        "skill" => "Full Stack Web Developer"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ahmad Rifai",
        "email" => "Rexus17@gmail.com",
        "image" => "man.png"
    ]);
});

Route::get('/portfolio', function(){
    return view('portfolio', [
        "title" => "Portfolio",
        "name" => "Ahmad Rifai"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Rifai",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores officia neque quibusdam laborum hic, ipsum fuga sequi quia, maxime iste facilis, voluptatibus deserunt harum animi. Beatae voluptatibus nisi esse iusto molestiae ipsa quas exercitationem dolore error, natus vel sunt ut, doloribus dolorum a obcaecati pariatur aspernatur eveniet. Harum totam in iure minima placeat voluptas, nisi corporis voluptates alias omnis animi, vel facere eum. Iure officia expedita odio saepe? Nam aperiam optio, nemo cupiditate magnam unde voluptas. Obcaecati tenetur quaerat atque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Randhika",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, consequatur at aperiam sed repudiandae delectus nihil maiores velit possimus iusto rerum ad. Facere doloremque eius numquam esse tempore quisquam deserunt repudiandae, magni ratione nesciunt sunt debitis, modi dolorum maxime illum ex inventore natus maiores blanditiis error impedit veniam quae labore. Quasi laudantium, fugit facilis eligendi rerum quos fuga minima, repellendus ipsum cum ducimus fugiat. Corporis provident suscipit at dolorum voluptatibus sit eius! Ex ducimus id ipsum blanditiis facilis architecto. Cupiditate maxime dolore vero ad in quam porro reprehenderit nemo neque. Enim eligendi at nesciunt obcaecati libero. Error dolores eum soluta."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// route post
Route::get('/posts', function () {
    return view('post', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

// single post page
Route::get('post/{slug}', function($slug){

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});

