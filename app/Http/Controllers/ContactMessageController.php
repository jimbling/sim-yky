<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageRequest;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function store(ContactMessageRequest $request)
    {
        ContactMessage::create($request->validated());

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
