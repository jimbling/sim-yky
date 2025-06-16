<?php

// app/Models/PatchDistribution.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PatchDistribution extends Model
{
    protected $fillable = [
        'patch_id',
        'school_registration_token_id',
        'status',
        'applied_at',
    ];

    protected $casts = [
        'applied_at' => 'datetime',
    ];

    public function patch(): BelongsTo
    {
        return $this->belongsTo(Patch::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(SchoolRegistrationToken::class, 'school_registration_token_id');
    }
}
