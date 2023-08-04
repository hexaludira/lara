<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Serforus Ventinae',
            'email' => 'serfo@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum, obcaecati itaque perspiciatis ducimus repellendus voluptates cupiditate non?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum, obcaecati itaque perspiciatis ducimus repellendus voluptates cupiditate non?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum,dsdsdsds...',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum, obcaecati itaque perspiciatis ducimus repellendus voluptates cupiditate non? Gasss Mbolang</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum,dsdsdsds...',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, est? Quod, impedit repellat laborum explicabo recusandae ipsam culpa delectus ratione magni ipsum, obcaecati itaque perspiciatis ducimus repellendus voluptates cupiditate non? Gasss Mbolang</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);


    }
}
