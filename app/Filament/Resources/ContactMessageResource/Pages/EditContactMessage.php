<?php

namespace App\Filament\Resources\ContactMessageResource\Pages;

use Filament\Actions;
use Illuminate\Support\Carbon;
use App\Mail\ContactMessageReply;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ContactMessageResource;

class EditContactMessage extends EditRecord
{
    protected static string $resource = ContactMessageResource::class;



    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Jika belum dibalas dan ada balasan baru
        if (!empty($data['reply']) && empty($this->record->replied_at)) {
            // Kirim email
            Mail::to($this->record->email)->send(
                new ContactMessageReply($this->record->name, $data['reply'])
            );

            // Tandai sudah dibalas
            $data['replied_at'] = Carbon::now();

            // Tampilkan notifikasi sukses
            Notification::make()
                ->title('Pesan berhasil dibalas.')
                ->success()
                ->send();
        }

        return $data;
    }

    protected function beforeFill(): void
    {
        if ($this->record->replied_at !== null) {
            Notification::make()
                ->title('Pesan ini sudah dibalas dan tidak dapat diedit lagi.')
                ->danger()
                ->send();

            $this->redirect(ContactMessageResource::getUrl());
        }
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
