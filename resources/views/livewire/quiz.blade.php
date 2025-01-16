<div x-dada="{ show: @entangle('showNextButton'), disabled: false }" class="w-2/3 mx-auto bg-white shadow-md rounded-lg p-6">
   <div class="mb-4">
      <div class="text-lg font-semibold text-gray-700">Kérdés {{ $questionCounter }} / 10</div>
      <progress x-bind:value="{{ $questionCounter }}" max="10" class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
         <div class="bg-blue-500 h-full"></div>
      </progress>
      <div class="mt-2 text-sm text-gray-500">Eddigi pontszám: <span class="font-medium text-gray-700">{{ $score }}</span></div>
   </div>
   @if ($currentQuestion)
   <div class="mb-6">
      <p class="text-xl font-semibold text-gray-800">{{ $currentQuestion['question'] }}</p>
   </div>
   <ul class="grid grid-cols-2 gap-4">
      @foreach ($currentQuestion['options'] as $index => $option)
      <div
         x-bind:class="{
               'border-4 border-green-700': {{ $index === $currentQuestion['answer'] ? 'disabled' : 'false' }},
               'bg-green-500 text-white': {{ $selectedAnswer === $index && $index === $currentQuestion['answer'] ? 'true' : 'false' }},
               'bg-red-500 text-white': {{ $selectedAnswer === $index && $index !== $currentQuestion['answer'] ? 'true' : 'false' }},
               'opacity-50 pointer-events-none': disabled
            }"
         @click="disabled = true"
         wire:click="check({{ $index }})"
         class="border border-gray-300 rounded-lg p-4 text-center text-gray-700 font-medium hover:bg-gray-100 cursor-pointer transition duration-200">{{ $option }}
      </div>
      @endforeach
   </ul>
   <button
      wire:click="nextQuestion"
      x-show="show"
      x-cloak
      @click="disabled = false"
      class="mt-6 w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200 shadow-md">Következő kérdés</button>
   @else
   <div class="text-center text-lg font-semibold text-gray-700">
      <p>Nincs több kérdés</p>
   </div>
   @endif
</div>
