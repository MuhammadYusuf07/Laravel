<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Yusuf",
        "email" => "yusuftkr.ac.id",
        "image" => "yusuf.jpg"
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Yusuf",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi blanditiis dolores aut porro fugiat dolorum minima velit
            architecto itaque assumenda impedit qui molestiae, voluptate voluptatem inventore repudiandae cupiditate ex facilis quos
            quam necessitatibus reiciendis aliquid! Fugiat alias aliquid id doloribus repudiandae voluptatibus itaque. Minima modi
            distinctio beatae ex cupiditate. Illum neque consectetur impedit et laudantium sit ipsa, odio alias perferendis fuga,
            nemo esse culpa. Molestias placeat asperiores animi sunt, unde sequi doloremque ex, obcaecati, dignissimos nam
            voluptatibus veritatis odit quibusdam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rangga Ghifari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum facere repellat incidunt corrupti porro id itaque
            consequatur, eaque iste, at quaerat quibusdam! Deserunt expedita assumenda enim veniam iste dolore quae commodi
            voluptate sapiente odit, cum, non alias aperiam veritatis suscipit quaerat porro labore inventore! Natus vel in quis
            veritatis, quo omnis veniam temporibus dolore repellat dolorem numquam aliquid vero quos aspernatur commodi autem id
            consequuntur? Sed itaque officiis ipsa magnam animi et deserunt debitis consectetur libero, veritatis necessitatibus
            consequuntur ut unde minus! Eaque ex repudiandae fuga doloremque debitis. Minus soluta dolor eveniet numquam! Totam
            itaque nesciunt voluptatum at temporibus! Inventore."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single pertama
Route::get('posts/{slug}', function ($slug) {
    


   

    return view('post',[
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});
