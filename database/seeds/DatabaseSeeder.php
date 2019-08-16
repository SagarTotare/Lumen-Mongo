<?php

use Illuminate\Database\Seeder;

use App\Collections\User;
use App\Collections\Comment;
use App\Collections\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        Comment::truncate();
        // factory(User::class, 10)->create();
        // factory(Post::class, 50)->create();
        factory(Comment::class, 100)->create();
    }
}
