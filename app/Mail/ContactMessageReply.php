<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageReply extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $reply;

    public function __construct(string $name, string $reply)
    {
        $this->name = $name;
        $this->reply = $reply;
    }

    public function build()
    {
        return $this->subject('Balasan dari Kami')
            ->markdown('emails.contact_reply')
            ->with([
                'name' => $this->name,
                'reply' => $this->reply,
            ]);
    }
}
