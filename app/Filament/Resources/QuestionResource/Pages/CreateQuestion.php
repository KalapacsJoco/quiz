<?php

namespace App\Filament\Resources\QuestionResource\Pages;

use App\Filament\Resources\QuestionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateQuestion extends CreateRecord
{
    public $options;
    protected static string $resource = QuestionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Az opciók adatainak elkülönítése
        $this->options = [
            $data['option1'],
            $data['option2'],
            $data['option3'],
            $data['option4'],
        ];

        unset($data['option1'], $data['option2'], $data['option3'], $data['option4']);
        return $data; // Csak a Question modell adatait hagyjuk meg
    }

    protected function afterCreate(): void
    {
        // A létrehozott rekordot az `$this->record` tulajdonság tárolja
        foreach ($this->options as $index => $optionText) {
            $this->record->options()->create([
                'text' => $optionText,
                'is_correct' => ($index + 1) == $this->record->correct_option,
            ]);
        }
    }
}
