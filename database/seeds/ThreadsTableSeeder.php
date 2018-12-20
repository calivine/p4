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
            ['Problem locating Apache error log on XAMPP','The file I\'m trying to access I think is called error in XAMPP\Apache\logs I\'ve gone into this directory using the cd command but when I try the CAT command I can\'t get the file to display',1],
            ['Intermittent 404','Anyone else experiencing 404 not found intermittently? I can confirm that my sub-domain on production was up and running but it keeps failing with 404 sometimes',2],
            ['Where do php files go?','Is there a standard for external php files (include/required) storage? In a subdirectory? At top level?',1],
            ['Subdomain URL not found','I went through the instructions, and my main domain works. The subdomain says the URL is not found. ',2]
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
