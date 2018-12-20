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
            ['There sure is a need to structure files...different people/orgs do it in different ways...',3,2],
            ['is it possibly called error.log and not just error?',1,2],
            ['Upon further inspection, I had a URL redirect record set which I did not delete in Namecheap\'s DNS settings which I believe could be the cause of the problem',2,1],
            ['Noticed it to happen only with the subdomain.',2,2],
            ['I will look further into whether i\'m storing the data correctly.',2,2],
            ['I have re-designed my application to include inputs of other kind but am still using the tabs for better layout.',3,1],
            ['I hope that no one deletes this comment.',2,1]
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
