<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser; // Tambahkan ini
use Filament\Panel; // Tambahkan ini
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser // Implement interface
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Tentukan siapa yang bisa akses Filament Panel
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Contoh: hanya user dengan email tertentu yang boleh
        return in_array($this->email, [
            'admin@example.com', // ganti dengan email kamu
        ]);
    }
}
