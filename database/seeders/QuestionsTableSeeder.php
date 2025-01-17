<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Option;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $questions = [

            [
                'question' => 'Melyik évben fedezte fel Amerika partjait Kolumbusz Kristóf?',
                'options' => ['1492', '1485', '1501', '1512'],
                'answer' => 0
            ],
            [
                'question' => 'Ki volt az ókori Egyiptom legismertebb női fáraója?',
                'options' => ['Nefertiti', 'Kleopátra', 'Hatsepszut', 'Ankhesenamun'],
                'answer' => 2
            ],
            [
                'question' => 'Melyik csata döntötte el Napóleon sorsát 1815-ben?',
                'options' => ['Austerlitz', 'Borogyinó', 'Waterloo', 'Leipzig'],
                'answer' => 2
            ],
            [
                'question' => 'Ki írta az Amerikai Függetlenségi Nyilatkozatot?',
                'options' => ['Benjamin Franklin', 'George Washington', 'Thomas Jefferson', 'John Adams'],
                'answer' => 2
            ],
            [
                'question' => 'Melyik városban gyújtották fel a híres Alexandriai Könyvtárat?',
                'options' => ['Róma', 'Athén', 'Konstantinápoly', 'Alexandria'],
                'answer' => 3
            ],
            [
                'question' => 'Melyik dinasztia uralkodott Kínában a Nagy Fal építésekor?',
                'options' => ['Ming', 'Tang', 'Han', 'Qin'],
                'answer' => 3
            ],
            [
                'question' => 'Melyik uralkodó hozta létre az Orosz Birodalmat?',
                'options' => ['II. Katalin', 'Nagy Péter', 'Rettegett Iván', 'Mihail Romanov'],
                'answer' => 1
            ],
            [
                'question' => 'Ki volt a Római Birodalom első császára?',
                'options' => ['Julius Caesar', 'Augustus', 'Nero', 'Tiberius'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik háború ért véget a Versailles-i békeszerződéssel?',
                'options' => ['Első világháború', 'Második világháború', 'Krími háború', 'Francia–porosz háború'],
                'answer' => 0
            ],
            [
                'question' => 'Melyik ország területén található a Grand Canyon?',
                'options' => ['Mexikó', 'Kanada', 'USA', 'Brazília'],
                'answer' => 2
            ],
            [
                'question' => 'Melyik óceán mossa Japán partjait?',
                'options' => ['Atlanti-óceán', 'Indiai-óceán', 'Jeges-tenger', 'Csendes-óceán'],
                'answer' => 3
            ],
            [
                'question' => 'Melyik országban található a híres fjordrendszer?',
                'options' => ['Svédország', 'Norvégia', 'Finnország', 'Izland'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik európai országban van a legtöbb tó?',
                'options' => ['Svédország', 'Finnország', 'Oroszország', 'Norvégia'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik országban található a világ legmélyebb tava, a Bajkál-tó?',
                'options' => ['Kína', 'Oroszország', 'Mongólia', 'Kazahsztán'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik kontinensen helyezkedik el a Viktória-vízesés?',
                'options' => ['Afrika', 'Ázsia', 'Dél-Amerika', 'Ausztrália'],
                'answer' => 0
            ],
            [
                'question' => 'Melyik ország fővárosa Damaszkusz?',
                'options' => ['Jordánia', 'Irán', 'Szíria', 'Libanon'],
                'answer' => 2
            ],
            [
                'question' => 'Melyik sportágban használnak ütőt és labdát, de nincs háló?',
                'options' => ['Golf', 'Tenisz', 'Röplabda', 'Krikett'],
                'answer' => 0
            ],
            [
                'question' => 'Melyik ország rendezte a 2016-os nyári olimpiai játékokat?',
                'options' => ['Japán', 'Brazília', 'Kína', 'Egyesült Királyság'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik sportágban nyert Michael Phelps 23 olimpiai aranyérmet?',
                'options' => ['Atlétika', 'Úszás', 'Tornasport', 'Kerékpározás'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik sportágban használják a "hole-in-one" kifejezést?',
                'options' => ['Billiárd', 'Golf', 'Bowling', 'Tenisz'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik ország futballválogatottja nyerte meg a 2018-as FIFA világbajnokságot?',
                'options' => ['Németország', 'Franciaország', 'Brazília', 'Argentína'],
                'answer' => 1
            ],
            [
                'question' => 'Hány játékos van egy kosárlabdacsapat kezdőjében?',
                'options' => ['5', '6', '7', '8'],
                'answer' => 0
            ],
            [
                'question' => 'Melyik város híres a Wimbledon tenisztornáról?',
                'options' => ['Párizs', 'New York', 'London', 'Melbourne'],
                'answer' => 2
            ],
            [
                'question' => 'Melyik sportágban található a kifejezés: "triple-double"?',
                'options' => ['Baseball', 'Kosárlabda', 'Hoki', 'Tenisz'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik ország híres a sumóbirkózásról?',
                'options' => ['Kína', 'Japán', 'Thaiföld', 'Dél-Korea'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik sportágban szerepel a Tour de France?',
                'options' => ['Autóverseny', 'Kerékpározás', 'Síelés', 'Futás'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik híres zeneszerző írta a "Für Elise" című művet?',
                'options' => ['Wolfgang Amadeus Mozart', 'Ludwig van Beethoven', 'Johann Sebastian Bach', 'Franz Schubert'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik hangszernek van 88 billentyűje?',
                'options' => ['Hegedű', 'Gitár', 'Zongora', 'Hárfa'],
                'answer' => 2
            ],
            [
                'question' => 'Melyik zenekar tagja volt Freddie Mercury?',
                'options' => ['The Beatles', 'Queen', 'Pink Floyd', 'The Rolling Stones'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik énekesnő adta ki a "Like a Virgin" című slágert?',
                'options' => ['Whitney Houston', 'Madonna', 'Mariah Carey', 'Celine Dion'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik zenei műfajban alkotott Elvis Presley?',
                'options' => ['Rock and Roll', 'Jazz', 'Blues', 'Klasszikus'],
                'answer' => 0
            ],
            [
                'question' => 'Melyik hangszer tartozik a vonós hangszerek közé?',
                'options' => ['Trombita', 'Hegedű', 'Furulya', 'Zongora'],
                'answer' => 1
            ],
            [
                'question' => 'Melyik zenekar készítette a híres "Stairway to Heaven" című dalt?',
                'options' => ['Led Zeppelin', 'The Doors', 'Deep Purple', 'Black Sabbath'],
                'answer' => 0
            ],
            [
                'question' => 'Melyik országban született a híres zeneszerző Antonio Vivaldi?',
                'options' => ['Olaszország', 'Spanyolország', 'Ausztria', 'Franciaország'],
                'answer' => 0
            ],
            [
                'question' => 'Melyik zeneszerző írta a "Négy évszak" című művet?',
                'options' => ['Johann Sebastian Bach', 'Ludwig van Beethoven', 'Antonio Vivaldi', 'Wolfgang Amadeus Mozart'],
                'answer' => 2
            ],
            [
                'question' => 'Melyik énekesnő nyert 2021-ben Grammy-díjat az "év albuma" kategóriában a "Folklore" című albumával?',
                'options' => ['Ariana Grande', 'Taylor Swift', 'Lady Gaga', 'Billie Eilish'],
                'answer' => 1
            ]
            
            
            
                    ];
        

        foreach ($questions as $q) {
            $question = Question::create([
                'question' => $q['question']
            ]);

            foreach ($q['options'] as $index => $optionText) {
                $option = Option::create([
                    'question_id' => $question->id,
                    'text' => $optionText
                ]);

                if ($index === $q['answer']) {
                    $question->update(['correct_option' => $q['answer']]);
                }
            }
        }
    }
}
