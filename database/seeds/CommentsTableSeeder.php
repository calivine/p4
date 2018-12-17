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
        $comments = [
            ['But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system',1,2],
            ['The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.',2,1],
            ['Lets all be unique together until we realise we are all the same.',2,1],
            ['We have a lot of rain in June.',2,2]
        ];
        foreach ($comments as $key => $commentData) {
            $comment = new Comment();
            $comment->text = $commentData[0];
            $comment->thread_id = $commentData[1];
            $comment->user_id = $commentData[2];
            $comment->save();
        }

    }
}
