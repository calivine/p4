<?php

use Illuminate\Database\Seeder;

use App\Thread;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = [
            ['Kafka Example','One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible',1],
            ['Far Far Away','Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. ',2]
        ];

        foreach ($threads as $key => $threadData) {
            $thread = new Thread();

            $thread->title = $threadData[0];
            $thread->body_text = $threadData[1];
            $thread->user_id = $threadData[2];
            $thread->save();
        }

    }
}
