<div x-data="{show: false}">
    <button
     @click="show = true"
     class="bg-blue-500 text-white px-4 py-2 rounded">Új kérdés hozzáadása</button>

    <div x-show="show" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <button @click="show = false"
             class="hover:text-gray-800">
                ✕
            </button>
            <form wire:submit.prevent="submit"  class="flex flex-col gap-4">
                <input wire:model="question" type="text" placeholder="Adja meg a kérdést" class="border rounded p-2">
                <input wire:model="indexNull" type="text" placeholder="Adja meg az első opciót" class="border rounded p-2">
                <input wire:model="indexOne" type="text" placeholder="Adja meg a második opciót" class="border rounded p-2">
                <input wire:model="indexTwo" type="text" placeholder="Adja meg az harmadik opciót" class="border rounded p-2">
                <input wire:model="indexThree" type="text" placeholder="Adja meg az negyedik opciót" class="border rounded p-2">
                <input wire:model="indexCorrect" type="number" placeholder="Adja meg a helyes válasz indexét" class="border rounded p-2">
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Beküldés</button>
            </form>
        </div>
    </div>
</div>
