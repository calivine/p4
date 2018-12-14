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
        $thread = new Thread();
        $thread->title = 'Here is a thread';
        $thread->body_text = 'And here is some body text.';
        $thread->user_id = 1;
        $thread->save();
    }
}
