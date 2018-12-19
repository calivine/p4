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
            ['Force pilaf corporation zeta.','Nicky earth pui. Namek force rasin launch. Salza ozaru mustard oolong myuu ha. Guido ozaru daemon 17 earth. Arqua i 17 onio. Amond bills hame android king. .',1],
            ['Nicky grand namekian 18 dore namekian great tao pilaf cell kai.','Nicky dance bujin namekian kai ha lakasei. Korin pilaf dr. dolltaki z. Ultra power yajirobe puar 17 corporation.',2],
            ['Broly bills uub arts 18 corporation whis great ha zangya daiz chaozu mercenary bio-broly namek zeta frieza caterpy.','Arqua bujin cacao grand blueberry cyborg .',1]
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
