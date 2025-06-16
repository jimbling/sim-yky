<?php

namespace App\Filament\Resources\PatchResource\Pages;

use Filament\Actions;
use App\Models\PatchDistribution;
use App\Filament\Resources\PatchResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePatch extends CreateRecord
{
    protected static string $resource = PatchResource::class;

    protected function afterCreate(): void
    {
        $record = $this->record;

        if (! $record->is_public && isset($this->data['target_schools'])) {
            foreach ($this->data['target_schools'] as $schoolId) {
                \App\Models\PatchDistribution::create([
                    'patch_id' => $record->id,
                    'school_registration_token_id' => $schoolId,
                    'status' => 'pending',
                ]);
            }
        }
    }
}
