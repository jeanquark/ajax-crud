<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        $posts = array(
            ['id' => 1, 'title' => 'My First Post', 'content' => 'This is my first post content.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'My Second Post', 'content' => 'This is my second post content.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'My Third Post', 'content' => 'This is my third post content.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'title' => 'My Fourth Post', 'content' => 'This is my fourth post content.', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
        DB::table('posts')->insert($posts);
    }
}
