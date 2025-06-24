<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'message', 'reply', 'replied_at'];

    public function getReplyStatusAttribute()
    {
        return $this->replied_at ? 'Sudah dibalas' : 'Belum dibalas';
    }
}
