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
            ],
            [
                "question" => "Melyik kontinensen található az Amazonas esőerdő?",
                "options" => ["Afrika", "Dél-Amerika", "Ázsia", "Ausztrália"],
                "answer" => 1 // Dél-Amerika
            ],
            [
                "question" => "Melyik évben volt az első holdraszállás?",
                "options" => ["1965", "1969", "1971", "1975"],
                "answer" => 1 // 1969
            ],
            [
                "question" => "Melyik vegyület felelős a növények zöld színéért?",
                "options" => ["Klorofill", "Melanin", "Hemoglobin", "Keratin"],
                "answer" => 0 // Klorofill
            ],
            [
                "question" => "Ki írta az 'Egri csillagok' című regényt?",
                "options" => ["Móricz Zsigmond", "Jókai Mór", "Gárdonyi Géza", "Krúdy Gyula"],
                "answer" => 2 // Gárdonyi Géza
            ],
            [
                "question" => "Mi a világ legmagasabb hegye?",
                "options" => ["K2", "Kilimandzsáró", "Everest", "Mont Blanc"],
                "answer" => 2 // Everest
            ],
            [
                "question" => "Melyik bolygót nevezik a 'vörös bolygónak'?",
                "options" => ["Mars", "Jupiter", "Vénusz", "Szaturnusz"],
                "answer" => 0 // Mars
            ],
            [
                "question" => "Ki volt az ókori görög mitológiában a tengerek istene?",
                "options" => ["Zeusz", "Hádész", "Poszeidón", "Hermész"],
                "answer" => 2 // Poszeidón
            ],
            [
                "question" => "Hány szín van a szivárványban?",
                "options" => ["5", "6", "7", "8"],
                "answer" => 2 // 7
            ],
            [
                "question" => "Mi a leghosszabb folyó a világon?",
                "options" => ["Amazonas", "Nílus", "Jangce", "Mississippi"],
                "answer" => 1 // Nílus
            ],
            [
                "question" => "Melyik évben tört ki az első világháború?",
                "options" => ["1912", "1914", "1916", "1918"],
                "answer" => 1 // 1914
            ],
            [
                "question" => "Melyik állat a magyar címerben látható?",
                "options" => ["Sas", "Turul", "Oroszlán", "Medve"],
                "answer" => 1 // Turul
            ],
            [
                "question" => "Hány bolygó van a Naprendszerben?",
                "options" => ["7", "8", "9", "10"],
                "answer" => 1 // 8
            ],
            [
                "question" => "Mi az elektron töltése?",
                "options" => ["Pozitív", "Semleges", "Negatív", "Nem töltött"],
                "answer" => 2 // Negatív
            ],
            [
                "question" => "Ki írta az 'Odüsszeia' című művet?",
                "options" => ["Szophoklész", "Platón", "Homérosz", "Arisztotelész"],
                "answer" => 2 // Homérosz
            ],
            [
                "question" => "Melyik a leggyorsabb szárazföldi állat?",
                "options" => ["Gepárd", "Oroszlán", "Antilop", "Tigris"],
                "answer" => 0 // Gepárd
            ],
            [
                "question" => "Melyik ország híres a Colosseumról?",
                "options" => ["Görögország", "Olaszország", "Spanyolország", "Franciaország"],
                "answer" => 1 // Olaszország
            ],
            [
                "question" => "Mi a Tejútrendszer központi égiteste?",
                "options" => ["Nap", "Fekete lyuk", "Hold", "Szaturnusz"],
                "answer" => 1 // Fekete lyuk
            ],
            [
                "question" => "Hány oldala van egy szabályos háromszögnek?",
                "options" => ["2", "3", "4", "5"],
                "answer" => 1 // 3
            ],
            [
                "question" => "Melyik az emberi test legkisebb csontja?",
                "options" => ["Üllő", "Kalapács", "Kengyel", "Lábközépcsont"],
                "answer" => 2 // Kengyel
            ],
            [
                "question" => "Melyik ország fővárosa Tokió?",
                "options" => ["Kína", "Japán", "Dél-Korea", "Vietnam"],
                "answer" => 1 // Japán
            ],
            [
                "question" => "Mi a Naprendszer legkisebb bolygója?",
                "options" => ["Merkúr", "Mars", "Vénusz", "Plútó"],
                "answer" => 0 // Merkúr
            ],
            [
                "question" => "Ki találta fel a telefonkészüléket?",
                "options" => ["Thomas Edison", "Nikola Tesla", "Alexander Graham Bell", "Galileo Galilei"],
                "answer" => 2 // Alexander Graham Bell
            ],
            [
                "question" => "Hány perc egy óra?",
                "options" => ["50", "60", "70", "100"],
                "answer" => 1 // 60
            ],
            [
                "question" => "Melyik híres épület található Párizsban?",
                "options" => ["Big Ben", "Colosseum", "Eiffel-torony", "Sagrada Família"],
                "answer" => 2 // Eiffel-torony
            ],
            [
                "question" => "Hány szögletű egy szabályos hatszög?",
                "options" => ["5", "6", "7", "8"],
                "answer" => 1 // 6
            ],
            [
                "question" => "Milyen gáz alkotja a Föld légkörének legnagyobb részét?",
                "options" => ["Oxigén", "Szén-dioxid", "Hidrogén", "Nitrogén"],
                "answer" => 3 // Nitrogén
            ],
            [
                "question" => "Ki írta a 'Szent Péter esernyője' című regényt?",
                "options" => ["Mikszáth Kálmán", "Jókai Mór", "Móricz Zsigmond", "Krúdy Gyula"],
                "answer" => 0 // Mikszáth Kálmán
            ],
            [
                "question" => "Melyik az emberi test legnagyobb csontja?",
                "options" => ["Combcsont", "Karcsont", "Csípőcsont", "Gerinc"],
                "answer" => 0 // Combcsont
            ],
            [
                "question" => "Melyik városban található a Golden Gate híd?",
                "options" => ["New York", "San Francisco", "Los Angeles", "Chicago"],
                "answer" => 1 // San Francisco
            ],
            [
                "question" => "Melyik híres tudós írta le a gravitáció törvényét?",
                "options" => ["Albert Einstein", "Isaac Newton", "Galileo Galilei", "Nikola Tesla"],
                "answer" => 1 // Isaac Newton
            ],
            [
                "question" => "Melyik elem vegyjele az Au?",
                "options" => ["Alumínium", "Arany", "Ezüst", "Higany"],
                "answer" => 1 // Arany
            ],
            [
                "question" => "Melyik évben történt a holdraszállás?",
                "options" => ["1965", "1969", "1972", "1980"],
                "answer" => 1 // 1969
            ],
            [
                "question" => "Melyik földrész a legnagyobb területű?",
                "options" => ["Afrika", "Ázsia", "Antarktisz", "Európa"],
                "answer" => 1 // Ázsia
            ],
            [
                "question" => "Melyik magyar várost nevezik a 'Királyok városának'?",
                "options" => ["Debrecen", "Pécs", "Esztergom", "Székesfehérvár"],
                "answer" => 3 // Székesfehérvár
            ],
            [
                "question" => "Hány játékos van egy futballcsapat kezdő tizenegyében?",
                "options" => ["9", "10", "11", "12"],
                "answer" => 2 // 11
            ],
            [
                "question" => "Melyik filmben szerepel a híres mondat: 'May the Force be with you'?",
                "options" => ["Harry Potter", "Star Wars", "A Gyűrűk Ura", "A keresztapa"],
                "answer" => 1 // Star Wars
            ],
            [
                "question" => "Mi Magyarország leghosszabb folyója?",
                "options" => ["Tisza", "Duna", "Rába", "Dráva"],
                "answer" => 1 // Duna
            ],
            [
                "question" => "Melyik ország zászlaja zöld, fehér és piros színű?",
                "options" => ["Franciaország", "Olaszország", "Mexikó", "Írország"],
                "answer" => 1 // Olaszország
            ],
            [
                "question" => "Mi a világ legmagasabb hegye?",
                "options" => ["K2", "Kilimandzsáró", "Everest", "Mont Blanc"],
                "answer" => 2 // Everest
            ],
            [
                "question" => "Melyik anyag vezeti a legjobban az elektromos áramot?",
                "options" => ["Arany", "Réz", "Ezüst", "Vas"],
                "answer" => 2 // Ezüst
            ],
            [
                "question" => "Melyik ország híres a sushi-ról?",
                "options" => ["Kína", "Japán", "Dél-Korea", "Thaiföld"],
                "answer" => 1 // Japán
            ],
            [
                "question" => "Melyik szerv pumpálja a vért az emberi testben?",
                "options" => ["Agy", "Máj", "Tüdő", "Szív"],
                "answer" => 3 // Szív
            ],
            [
                "question" => "Milyen színű a 'STOP' közlekedési tábla?",
                "options" => ["Kék", "Zöld", "Piros", "Sárga"],
                "answer" => 2 // Piros
            ],
            [
                "question" => "Melyik művész alkotta a 'Dávid-szobrot'?",
                "options" => ["Leonardo da Vinci", "Michelangelo", "Raffaello", "Donatello"],
                "answer" => 1 // Michelangelo
            ],
            [
                "question" => "Hány hónap van egy évben?",
                "options" => ["10", "11", "12", "13"],
                "answer" => 2 // 12
            ],
            [
                "question" => "Melyik ország zászlaja kék és sárga színű?",
                "options" => ["Ukrajna", "Svédország", "Brazília", "Argentína"],
                "answer" => 0 // Ukrajna
            ],
            [
                "question" => "Melyik sportághoz kapcsolódik Lionel Messi?",
                "options" => ["Kosárlabda", "Tenisz", "Futball", "Jégkorong"],
                "answer" => 2 // Futball
            ],
            [
                "question" => "Melyik állat adja a tejet, amelyből feta sajt készül?",
                "options" => ["Tehén", "Kecske", "Bivaly", "Juh"],
                "answer" => 3 // Juh
            ],
            [
                "question" => "Melyik földrészhez tartozik Ausztrália?",
                "options" => ["Európa", "Ázsia", "Óceánia", "Afrika"],
                "answer" => 2 // Óceánia
            ],
            [
                "question" => "Melyik híres tudós dolgozott ki három mozgástörvényt?",
                "options" => ["Albert Einstein", "Isaac Newton", "Galileo Galilei", "Nikola Tesla"],
                "answer" => 1 // Isaac Newton
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
