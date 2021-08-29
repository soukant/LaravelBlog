<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();



            $user = User::factory()->create([
                'name' => 'Ahmed Sefrioui'
            ]);

            Post::factory(5)->create([
            'user_id' => $user->id
            ]);



//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user ->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'family-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user ->id,
//            'category_id' => $work ->id,
//            'title' => 'My Work Post',
//            'slug' => 'work-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>'
//        ]);


    }
}
