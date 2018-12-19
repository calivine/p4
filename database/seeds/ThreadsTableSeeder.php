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
            ['Force pilaf corporation zeta.','Nicky earth pui. Namek force rasin launch. Salza ozaru mustard oolong myuu ha. Guido ozaru daemon 17 earth. Arqua akira rasin fighters robot. Bills grand dance z salt 18 power. Robot ozaru popo cell toriyama ape gravity papoi 17 onio. Amond bills hame android king. Majin miira paragus dore luud pai ultimate z corporation pole minotia salza. World papoi uub power raspberry namekian 17 corporation 17 oolong namekian korin sansho. World amond maron dende bido pole 17. Dance bills. Grand great. Miira akira nam. Rasin robot majin.',1],
            ['Nicky grand namekian 18 dore namekian great tao pilaf cell kai.','Nicky dance bujin namekian kai ha lakasei. Korin pilaf dr. dolltaki z. Ultra power yajirobe 17 satan corporation fighters fighter. Goten arale. Brief jeice raspberry. Bulma korin tarble 17 puar 17 corporation launch 17 dr.. Radar power hope toriyama miira red. Namek arqua salza mustard. Akira force fighters satan mai miira mr. cold ozaru.',2],
            ['Broly bills uub arts 18 corporation whis great ha zangya daiz chaozu mercenary bio-broly namek zeta frieza caterpy.','Arqua bujin cacao grand blueberry cyborg arqua tenshinhan namekian hame. Akira power corporation. Nicky bills towa bardock ha 17 commander froug 17 dende. Majin pilaf tora mercenary vegeta chun lakasei shu namekian fighter corporation raspberry. Blood amond corporation ultimate recoome. Blood orlen. Olibu miira super corporation namekian. Brief korin pui papoi hame shorty leon caterpy. Super orlen dolltaki son gotenks 17 blood ha. Maron satan zarbon ultimate ha roshi. Jeice rasin borgos vegito jr. myuu dore ultra. Miira dende force scarface tenshinhan. Arqua goten ultimate bio-broly 17 raspberry.',1]
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
