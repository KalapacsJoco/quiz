<?php

namespace App\Livewire;

use Livewire\Component;

class Quiz extends Component
{
    public $questions = [];
    public $currentIndex = 0;
    public $currentQuestion = null;
    public $score = 0;
    public $selectedAnswer = null;
    public $showNextButton = false;

    public function mount()
    {
        $getQuestions = include resource_path('views/components/questions.php');
        $this->questions = $getQuestions(10);
    }

    public function check($index)
    {
        if ($index == $this->currentQuestion['answer']) {
            $this->score++;
        }

        // Engedélyezzük a "Következő kérdés" gombot
        $this->showNextButton = true;
    }

    public function nextQuestion()
    {
        $this->currentIndex++;
        $this->showNextButton = false; // Gomb elrejtése az új kérdésnél
    }

    public function render()
    {
        $this->currentQuestion = $this->questions[$this->currentIndex] ?? null;
        return view('livewire.quiz', ['currentQuestion' => $this->currentQuestion]);
    }
}
