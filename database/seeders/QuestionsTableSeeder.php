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
                "question" => "Mi a víz vegyjele?",
                "options" => ["H2O", "CO2", "NaCl", "O2"],
                "answer" => 0 // H2O
            ],
            [
                "question" => "Ki festette a Mona Lisát?",
                "options" => ["Vincent van Gogh", "Leonardo da Vinci", "Michelangelo", "Pablo Picasso"],
                "answer" => 1 // Leonardo da Vinci
            ],
            [
                "question" => "Melyik a Föld legnagyobb óceánja?",
                "options" => ["Atlanti-óceán", "India-óceán", "Csendes-óceán", "Jeges-tenger"],
                "answer" => 2 // Csendes-óceán
            ],
            [
                "question" => "Ki írta a 'Pál utcai fiúk' című regényt?",
                "options" => ["Ady Endre", "Molnár Ferenc", "Jókai Mór", "Kosztolányi Dezső"],
                "answer" => 1 // Molnár Ferenc
            ],
            [
                "question" => "Mi az emberi test legnagyobb szerve?",
                "options" => ["Tüdő", "Szív", "Bőr", "Máj"],
                "answer" => 2 // Bőr
            ],
            [
                "question" => "Melyik bolygó a Naprendszer legnagyobb bolygója?",
                "options" => ["Föld", "Mars", "Szaturnusz", "Jupiter"],
                "answer" => 3 // Jupiter
            ],
            [
                "question" => "Mikor volt az 1848-as forradalom és szabadságharc kezdete Magyarországon?",
                "options" => ["Március 15.", "Április 4.", "Október 6.", "November 7."],
                "answer" => 0 // Március 15.
            ],
            [
                "question" => "Milyen színnel jelöljük a cinket a periódusos rendszerben?",
                "options" => ["Fehér", "Kék", "Piros", "Sárga"],
                "answer" => 1 // Kék
            ],
            [
                "question" => "Melyik ország fővárosa Stockholm?",
                "options" => ["Norvégia", "Svédország", "Finnország", "Dánia"],
                "answer" => 1 // Svédország
            ],
            [
                "question" => "Melyik magyar költő írta a 'Himnusz' szövegét?",
                "options" => ["Arany János", "Petőfi Sándor", "Vörösmarty Mihály", "Kölcsey Ferenc"],
                "answer" => 3 // Kölcsey Ferenc
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
