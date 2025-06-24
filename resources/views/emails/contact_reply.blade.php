@component('mail::message')
    # Halo {{ $name }}

    Kami baru saja membalas pesan Anda:

    ---

    {{ $reply }}

    ---

    Terima kasih telah menghubungi kami.

    Salam,
    {{ config('app.name') }}
@endcomponent
