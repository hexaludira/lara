<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul post Satu",
            "slug" => "judul-post-satu",
            "author" => "Serfo",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto cumque pariatur neque quas rem alias itaque voluptas amet optio consequuntur, debitis laborum distinctio nam obcaecati molestiae nihil. Ducimus, accusantium expedita, repellendus dignissimos reprehenderit aliquid voluptatem molestiae atque impedit ipsam aperiam quas mollitia facere, rerum beatae? Neque dolore illum facilis inventore, tempora similique pariatur consectetur quam quo distinctio, beatae alias ipsam molestias esse aspernatur accusamus quibusdam rem explicabo perspiciatis velit, fugiat accusantium! Eius, nihil. Magni illo delectus quis eaque est ad!"
        ],
        [
            "title" => "Judul post Dua",
            "slug" => "judul-post-dua",
            "author" => "Rinoa",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto cumque pariatur neque quas rem alias itaque voluptas amet optio consequuntur, debitis laborum distinctio nam obcaecati molestiae nihil. Ducimus, accusantium expedita, repellendus dignissimos reprehenderit aliquid voluptatem molestiae atque impedit ipsam aperiam quas mollitia facere, rerum beatae? Neque dolore illum facilis inventore, tempora similique pariatur consectetur quam quo distinctio, beatae alias ipsam molestias esse aspernatur accusamus quibusdam rem explicabo perspiciatis velit, fugiat accusantium! Eius, nihil. Magni illo delectus quis eaque est ad!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        // $posts = self::$blog_posts; //Mengacu pada variabel static di kelas ini
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}
