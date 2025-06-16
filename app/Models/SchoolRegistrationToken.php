<?php

// app/Models/ClientToken.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolRegistrationToken extends Model
{
    protected $fillable = [
        'token',
        'school_uuid',
        'name',
        'npsn',
        'email',
        'address',
        'status',
        'valid_until',
        'domain',
        'activated_at',
    ];

    protected $casts = [
        'valid_until' => 'date',
        'activated_at' => 'datetime',
    ];
}
