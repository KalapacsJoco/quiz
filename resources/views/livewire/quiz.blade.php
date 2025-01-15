<div x-dada="{ show: @entangle('showNextButton'), disabled: false }" class="h-1/2">
   <div>
      <div>Eddigi pontszám: {{ $score }}</div>
      @if ($currentQuestion)
      <p>{{ $currentQuestion['question'] }}</p>
      <ul class="grid grid-cols-2 gap-4 border p-2 ">
         @foreach ($currentQuestion['options'] as $index => $option)
         <div
            x-bind:class="disabled ? 'opacity-50 pointer-events-none' : ''"
            @click="disabled = true"
            wire:click="check({{ $index }})"
            class="border ">{{ $option }}
         </div>
         @endforeach

      </ul>
      <button
         x-show="show"
         x-cloak
         wire:click="nextQuestion"
         @click="disabled = false"
         wire:click="nextQuestion"
         class="mt-2 border">Kovetkező kérdés</button>

      @else
      <p>Nincs több kérdés</p>
      @endif
   </div>
</div>