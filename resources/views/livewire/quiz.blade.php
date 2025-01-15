<div class="h-1/2">
   <div>Eddigi pontszám: {{ $score }}</div>
   @if ($currentQuestion)
      <p>{{ $currentQuestion['question'] }}</p>
      <ul class="grid grid-cols-2 gap-4 border p-2 ">
         @foreach ($currentQuestion['options'] as $index => $option)
            <div wire:click="check({{ $index }})" class="border ">{{ $option }}</div>
         @endforeach
      </ul>
      <button wire:click="nextQuestion"  class="mt-2 border" >Kovetkező kérdés</button>
   @else
      <p>Nincs több kérdés</p> 
   @endif
</div>
