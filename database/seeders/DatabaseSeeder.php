<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Catch_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // $user = User::factory()->create();
        Post::factory(5)->create();

// or
// $user = User::factory()->create(
//     [
//         'name'=>'walaa Alahmad'
//     ]
// );

// Post::factory(5)->create(
//     [
//         'user_id'=>$user->id
//     ]
// );


/// bad way
    //     $work = Category::create([
    //         'name' => 'Work',
    //         'slug' => 'work'

    //     ]);
    //     $family = Category::create([
    //         'name' => 'Family',
    //         'slug' => 'family'

    //     ]);
    //     $personal = Category::create([
    //         'name' => 'Personal',
    //         'slug' => 'personal'

    //     ]);
    //     Post::create([

    //             'user_id' => $user->id,
    //             'category_id' => $family->id,
    //             'title' => 'My Family Post',
    //             'excerpt' => 'FamilyFamilyFamily ',
    //             'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    //             sunt in culpa qui officia deserunt mollit anim id est laborum.'


    //     ]);
    //     Post::create([

    //             'user_id' => $user->id,
    //             'category_id' => $work->id,
    //             'title' => 'My Work Post',
    //             'excerpt' => 'WORK WorkWork',
    //             'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    //             sunt in culpa qui officia deserunt mollit anim id est laborum.'
    //     ]);
    //     Post::create([

    //             'user_id' => $user->id,
    //             'category_id' => $personal->id,
    //             'title' => 'My personal Post',
    //             'excerpt' => 'WOpersonalpersonalpersonalRK personal',
    //             'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    //             sunt in culpa qui officia deserunt mollit anim id est laborum.'
    //     ]);
     }
}
