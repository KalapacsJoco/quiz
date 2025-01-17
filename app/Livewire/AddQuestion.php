<?php

namespace App\Livewire;

use Livewire\Component;

class AddQuestion extends Component
{
    public $question= null;
    public $indexNull= null;
    public $indexOne= null;
    public $indexTwo= null;
    public $indexThree= null;
    public $indexCorrect= null;

    public function submit() {
        dd('szia');
    }

    public function render()
    {
        // dd($this->question);
       
        return view('livewire.add-question');
    }
}
