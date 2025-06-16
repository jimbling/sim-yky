<?php

namespace App\Filament\Resources\PatchResource\Pages;

use App\Models\PatchDistribution;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PatchResource;

class EditPatch extends EditRecord
{
    protected static string $resource = PatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $record = $this->record;

        // Jika is_public = true, hapus semua distribusi sebelumnya (tidak spesifik lagi)
        if ($record->is_public) {
            PatchDistribution::where('patch_id', $record->id)->delete();
        } else {
            // Sinkronisasi distribusi
            $newSchoolIds = $this->data['target_schools'] ?? [];

            // Ambil yang sudah ada
            $existingDistributions = PatchDistribution::where('patch_id', $record->id)->pluck('school_registration_token_id')->toArray();

            // Tambahkan yang belum ada
            $toAdd = array_diff($newSchoolIds, $existingDistributions);
            foreach ($toAdd as $schoolId) {
                PatchDistribution::create([
                    'patch_id' => $record->id,
                    'school_registration_token_id' => $schoolId,
                    'status' => 'pending',
                ]);
            }

            // Hapus yang tidak lagi dipilih
            $toDelete = array_diff($existingDistributions, $newSchoolIds);
            PatchDistribution::where('patch_id', $record->id)
                ->whereIn('school_registration_token_id', $toDelete)
                ->delete();
        }
    }
}
