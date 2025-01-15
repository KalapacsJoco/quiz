<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Quiz extends Component
{

    public $questions = [];
    public $currentIndex = 0;
    public $currentQuestion =0;
    public $score = 0;
    public $selectedAnswer = null;

    public function mount(){
        $getQuestions =include resource_path('views/components/questions.php');
        $this->questions = $getQuestions(10);
        // dd($questions); 

    }

    public function check($index){
        // dd($index,);
        if ($index == $this->currentQuestion['answer']) {
            $this->score ++;
           

        }
        // dd($this->score);
    }

    public function nextQuestion() {
        $this->currentIndex++;
    }

    public function render()
    {
        $this->currentQuestion = $this->questions[$this->currentIndex] ?? null;
        // dd($this->currentQuestion);
        return view('livewire.quiz', ['currentQuestion' => $this->currentQuestion]);
    }
}
