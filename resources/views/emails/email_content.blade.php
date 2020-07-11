@component('mail::message')
<p>Buna ziua ,sunt  {{ $data['name'] }}</p>
<p>Mesaj:{{ $data['message'] }}.</p>
<p>Multumesc de atentie .</p>
@endcomponent
