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
            ['Akira jeice abo dore bebi miira cooler napa 18 olibu commander corporation cui.','Ozaru bujin. Brief ozaru. Papoi radar miira zarbon ape myuu god yajirobe. Amond broly dance grand videl luud son jeice tournament corporation turles 18. Earth satan guido. Fasha maron jackie corporation. Gohan radar bojack corporation power commander yajirobe. Bulma dance cold god. Pilaf cacao dr. brief garlic tien boo world commander arqua commander.',1],
            ['Earth fasha namole ribbon tien ha dolltaki goku bojack mustard.','Blood broly nimbus tenshinhan. Radar rasin abo bido bio-broly. Bulma froug korin z shinhan dragon earth shenron capsule daemon. Maron fasha akira corporation dolltaki raspberry tail kai dabura. Miira korin shu martial fighters froug bio-broly chi-chi. Bills maron great puar minotia ha blueberry grandpa jr. ha. Nicky papoi. Papoi orlen lord tao ozaru zeta nam kado corporation 18 caterpy hame dolltaki corporation. Robot pilaf shinhan 17 trunks. Salza earth tien blueberry dolltaki cyborg. Great pilaf piccolo gotenks freeza frieza scarface broly 17 trunks blueberry. Bujin maron.',2],
            ['Blood power gure scarface.','Power broly oolong shenron chun ha ribbon blueberry scarface turles suno shinhan. Bills arale cyborg cell shinhan paragus olibu. Robot fasha captain cui 17 papoi blueberry luud king tournament. Ultra akira tien launch tail. Fasha arale kame corporation syn. Arqua orlen great kogu robot ha salt power supreme paragus baby 18. Grand blood bibidi namole commander satan 17 luud. Videl dance. Super roshi cooler ha. Force gohan. Radar ozaru bardock android turles ape ha. Papoi spice world ultimate nam amond ball bubbles king. Arale world energy babidi jeice scarface orlen spice z shugesh.',1],
            ['Arale ultra corporation ha turtle martial caterpy pikkon ha dabura.','Froug arqua akira lord. Dance goten fusion baby bubbles ha ultimate kai 17 burter 17. Gohan arqua mr. pole tenshinhan commander arale bibidi 18 ultimate pan paragus. Korin ozaru baby scarface zeta. Pilaf videl ultimate bebi neiz tenshinhan boo fasha dance bardock. Earth dance dr. namek ox-king jr.. Bulma olibu sansho. Jeice brief lakasei journey broly popo z tien.',2],
            ['Akira force corporation kai ha commander blood ha tien.','Brief akira guido mercenary 17. Ultra goten bido dragon buu tournament hirudegarm. Dende force. Bills world. Cacao olibu z onio. Salza arqua dolltaki 17 tarble z scarface tien raspberry ha. Force super uub gero pan ginyu capsule son. Grand ultra. World grand minotia gotenks mercenary hame ape oolong pikkon raspberry syn. Power dende fasha scarface buu gotenks scarface freeza namekian. Jeice videl kai supreme jeice. Ginyu power minotia caterpy zangya yamcha. Salza nicky son trunks. Earth radar babidi fighters. Roshi papoi z ball korin ha blueberry 18 raspberry corporation bio-broly. Blood guido dr. neiz god z patrol. Cacao great.',3],
            ['Froug pilaf boo arts 17 ball fighters ozaru bojack.','Blood akira blueberry fighters saiyan patrol dolltaki cui gravity freeza. Olibu korin marron orlen shinhan. Ginyu fasha kai hirudegarm vegito orlen shenron. Rasin namek satan arts boo king tenshinhan pole pikkon shenron 18 dolltaki. Salza amond kado raspberry corporation dodoria ozaru tournament vinegar shu supreme ha. Nicky korin shorty. World robot dragon ginger supreme oolong shu tournament. Salza fasha tien vegeta. Force namek. Satan amond. Ultra jeice power bojack vegeta. Dende dance. Earth salza dolltaki cell gotenks ha namekian pai 18. Ultra grand. Dance brief dr. grand goku buu saiyan shinhan.',2]
        ];

        $count = count($threads);

        foreach ($threads as $key => $threadData) {
            $thread = new Thread();

            $thread->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $thread->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $thread->title = $threadData[0];
            $thread->body_text = $threadData[1];
            $thread->user_id = $threadData[2];
            $thread->save();

            $count--;
        }

    }
}
