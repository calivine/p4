<?php

use Illuminate\Database\Seeder;

use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comment();
        $comment->text = 'Here is the first comment.';
        $comment->thread_id = 1;
        $comment->user_id = 1;
        $comment->save();
    }
}
