{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
    # {{ $mailData['title'] }}
    The body of your message.
    @component('mail::button', ['url' => $mailData['url']])
        Button Text
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
