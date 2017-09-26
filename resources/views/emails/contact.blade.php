@component('mail::message')
Aşağıda bilgileri olan kullanıcı iletişim formu aracılığı ile bizlere ulaşmıştır.

@component('mail::panel', ['url' => ''])
    Ad Soyad : {{$content['name']}}
@endcomponent

@component('mail::panel', ['url' => ''])
    E-Mail : {{$content['email']}}
@endcomponent

@component('mail::panel', ['url' => ''])
    Konu : {{$content['subject']}}
@endcomponent

@component('mail::panel', ['url' => ''])
    Mesaj : {{$content['message']}}
@endcomponent

Teşekkürler,<br>
{{ config('app.name') }}
@endcomponent
