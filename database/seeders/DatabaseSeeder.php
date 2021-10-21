<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        // factory(App\Model\Catergory::class, 10)->create();
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        // $user =  User::factory([
        //     'name' => 'John Doe',
        // ])->create();


        // Post::factory(5)->create([
        //     'user_id' => $user->id
        // ]);
        // \App\Models\User::factory(10)->create();
        // $user =  User::factory()->create();

        // User::factory()
        //     ->count(50)
        //   ->hasPosts(1)
        //     ->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $family =  Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);
        // $work =   Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, fugiat eos qui illo ex voluptatum id, quos dolorum eveniet adipisci optio vitae, iusto consectetur illum. A accusamus omnis consectetur minima.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, fugiat eos qui illo ex voluptatum id, quos dolorum eveniet adipisci optio vitae, iusto consectetur illum. A accusamus omnis consectetur minima.</p>'
        // ]);
    }
}
