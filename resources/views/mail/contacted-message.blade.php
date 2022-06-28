@component('mail::message')
# Hi there!

Somebody contacted you with this message:

"{{ $message }}"

Maybe, you want to get in touch, using this shared email: {{ $email }}


@endcomponent
