<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class Quiz extends Component
{
    public $questions = [];
    public $currentIndex = 0;
    public $currentQuestion = null;
    public $score = 0;
    public $selectedAnswer = null;
    public $showNextButton = false;
    public $questionCounter = 1;

    public function mount()
    {
        // Véletlenszerű kérdések kiválasztása egyediséget garantálva
        $this->questions = Question::with('options')
            ->inRandomOrder()
            ->limit(10) // Csak 10 rekordot kérünk le
            ->get()
            ->map(function ($question) {
                return [
                    'question' => $question->question,
                    'options' => $question->options->pluck('text')->toArray(),
                    'answer' => $question->correct_option,
                ];
            })
            ->toArray();
    }
    
    
    

    public function check($index)
    {
        $this->selectedAnswer = $index;
        // dd($this->currentQuestion);
        if ($index == $this->currentQuestion['answer']) {
            $this->score++;
        }


        // Engedélyezzük a "Következő kérdés" gombot
        $this->showNextButton = true;
    }

    public function nextQuestion()
    {
        $this->currentIndex++;
        $this->selectedAnswer = null;
        $this->showNextButton = false; // Gomb elrejtése az új kérdésnél
        $this->questionCounter++;

    }

    public function render()
    {
        
        $this->currentQuestion = $this->questions[$this->currentIndex] ?? null;
        return view('livewire.quiz', ['currentQuestion' => $this->currentQuestion]);
    }
}
