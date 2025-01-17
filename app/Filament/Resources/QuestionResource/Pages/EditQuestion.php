<?php

namespace App\Filament\Resources\QuestionResource\Pages;

use App\Filament\Resources\QuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuestion extends EditRecord
{
    public $options;
    protected static string $resource = QuestionResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
{
    $this->options = [
        $data['option1'],
        $data['option2'],
        $data['option3'],
        $data['option4'],
    ];

    unset($data['option1'], $data['option2'], $data['option3'], $data['option4']);
    return $data;
}

protected function afterSave($record): void
{
    // Korábbi opciók törlése és újak létrehozása
    $record->options()->delete();

    foreach ($this->options as $index => $optionText) {
        $record->options()->create([
            'text' => $optionText,
            'is_correct' => ($index + 1) == $record->correct_option,
        ]);
    }
}


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
