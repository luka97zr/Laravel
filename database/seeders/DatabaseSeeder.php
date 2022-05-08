<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        Category::factory(5)->create();
        User::factory(3)->create();

        Post::factory(25)->create();
    //    $user = User::factory()->create();

    //    $personal = Category::create([
    //        'name' => 'Personal',
    //        'slug'   => 'personal'
    //    ]);

    //    $family = Category::create([
    //     'name' => 'Family',
    //     'slug'   => 'family'
    //     ]);

    //     $work = Category::create([
    //         'name' => 'Work',
    //         'slug'   => 'work'
    //     ]);

    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id'=>$family->id,
    //         'title'=> 'My Family Post',
    //         'slug'=> 'my-family-post',
    //         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quas repudiandae deleniti itaque optio soluta dignissimos possimus earum dolorum perspiciatis, excepturi animi nobis dolores minima blanditiis facere distinctio accusantium nemo.
    //         '
    //     ]);
    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id'=>$personal->id,
    //         'title'=> 'My Personal Post',
    //         'slug'=> 'my-personal-post',
    //         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quas repudiandae deleniti itaque optio soluta dignissimos possimus earum dolorum perspiciatis, excepturi animi nobis dolores minima blanditiis facere distinctio accusantium nemo.
    //         '
    //     ]);
    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id'=>$work->id,
    //         'title'=> 'My Work Post',
    //         'slug'=> 'my-work-post',
    //         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quas repudiandae deleniti itaque optio soluta dignissimos possimus earum dolorum perspiciatis, excepturi animi nobis dolores minima blanditiis facere distinctio accusantium nemo.
    //         '
    //     ]);
    }
}
