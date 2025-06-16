<?php
// app/Models/Patch.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patch extends Model
{
    protected $fillable = [
        'name',
        'version',
        'description',
        'file_path',
        'is_public',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    public function distributions(): HasMany
    {
        return $this->hasMany(PatchDistribution::class);
    }
}
