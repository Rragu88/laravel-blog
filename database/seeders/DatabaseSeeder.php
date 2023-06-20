<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
           'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

//        Post::factory(5)->create();

//        $user = User::factory()->create();

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
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa vitae tortor condimentum lacinia quis vel eros. Tempus imperdiet nulla malesuada pellentesque elit. Morbi non arcu risus quis varius. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Libero nunc consequat interdum varius sit amet mattis. Scelerisque in dictum non consectetur. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit. Elit duis tristique sollicitudin nibh sit amet. Pellentesque dignissim enim sit amet venenatis urna.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => '<p>Excerpt for my work post</p>',
//            'body' => '<p>Egestas sed tempus urna et pharetra pharetra.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My Personal Post',
//            'slug' => 'my-personal-post',
//            'excerpt' => '<p>Excerpt for personal my post</p>',
//            'body' => '<p>Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat.</p>'
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
