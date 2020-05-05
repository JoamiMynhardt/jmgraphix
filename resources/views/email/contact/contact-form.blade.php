@component('mail::message')

# Thank you for your message

Name: {{ $data['name'] }}
Email: {{ $data['email'] }}
Number: {{ $data['phone'] }}
Subject: {{ $data['subject'] }}

Message:
{{ $data['message'] }}

@endcomponent
