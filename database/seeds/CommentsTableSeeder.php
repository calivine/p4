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
            ['Radar gohan abo bido tournament appule.',3,2],
            ['Broly blood korin turles machine 17.',1,2],
            ['Power fasha.',2,1],
            ['Namek radar z.',2,2],
            ['Nicky brief yajirobe bujin syn.',2,2],
            ['Korin roshi tarble hirudegarm corporation gravity namek.',3,1],
            ['Dende videl commander 18 blueberry king.',2,1],
            ['Miira spice fasha trunks vegito.',4,3]
        ];

        $count = count($comments);

        foreach ($comments as $key => $commentData) {
            $comment = new Comment();

            $comment->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $comment->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $comment->text = $commentData[0];
            $comment->thread_id = $commentData[1];
            $comment->user_id = $commentData[2];
            $comment->save();

            $count--;
        }

    }
}
