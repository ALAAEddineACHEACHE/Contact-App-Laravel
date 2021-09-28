@component('mail::panel')
    <p>From : {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Message: {!! $content !!}</p>
@endcomponent
