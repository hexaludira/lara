<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "Satria Utomo",
        "email" => "satria@gmail.com",
        "image" => "satria.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']

        // function () {
        //     return view('posts',[
        //         "title" => "Posts",
        //         "posts" => Post::all()
        //     ]);
        // }

);

//halaman single post menggunakan model routing
Route::get('/posts/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name

    ]);
});

//halaman single post
// Route::get('posts/{slug}', [PostController::class, 'show']

//     // function ($slug){
//     // $blog_posts = [
//     //     [
//     //         "title" => "Judul post Satu",
//     //         "slug" => "judul-post-satu",
//     //         "author" => "Serfo",
//     //         "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto cumque pariatur neque quas rem alias itaque voluptas amet optio consequuntur, debitis laborum distinctio nam obcaecati molestiae nihil. Ducimus, accusantium expedita, repellendus dignissimos reprehenderit aliquid voluptatem molestiae atque impedit ipsam aperiam quas mollitia facere, rerum beatae? Neque dolore illum facilis inventore, tempora similique pariatur consectetur quam quo distinctio, beatae alias ipsam molestias esse aspernatur accusamus quibusdam rem explicabo perspiciatis velit, fugiat accusantium! Eius, nihil. Magni illo delectus quis eaque est ad!"
//     //     ],
//     //     [
//     //         "title" => "Judul post Dua",
//     //         "slug" => "judul-post-dua",
//     //         "author" => "Rinoa",
//     //         "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto cumque pariatur neque quas rem alias itaque voluptas amet optio consequuntur, debitis laborum distinctio nam obcaecati molestiae nihil. Ducimus, accusantium expedita, repellendus dignissimos reprehenderit aliquid voluptatem molestiae atque impedit ipsam aperiam quas mollitia facere, rerum beatae? Neque dolore illum facilis inventore, tempora similique pariatur consectetur quam quo distinctio, beatae alias ipsam molestias esse aspernatur accusamus quibusdam rem explicabo perspiciatis velit, fugiat accusantium! Eius, nihil. Magni illo delectus quis eaque est ad!"
//     //     ]
//     // ];

//     // $new_post = [];

//     // foreach ($blog_posts as $post) {
//     //     if($post["slug"] === $slug) {
//     //         $new_post = $post;
//     //     }
//     // }


//     // return view('post', [
//     //     "title" => "Single Post",
//     //     "post" => Post::find($slug)
//     // ]);
//     // }
// );

// Route::get('/home', function () {
//     return view('home');
// });



// Route::get('/posts', function () {
   

//     return view('posts', [
//         "title" => "Posts",
//         "posts" => $blog_posts
//     ]);
// });

