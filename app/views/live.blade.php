@extends('layout')

@section('content')

<p class="timezone-notice">Timezone is CET</p>

<h1>{{ date('F j, Y') }}</h1>

@if (count($messages))
    @foreach($messages as $message)
    {{ View::make('_message', compact('message')) }}
    @endforeach
@else
<div class="countdown-message">
    <p>Laracon EU starts on the 28th of August. We'll sporadically post updates on the 28th and will fully live-blog the main event on the 29th and 30th.</p>
    <p>Tune in here for live coverage during the event!</p>
    <p>The Laracon EU Staff</p>
</div>
@endif

@stop