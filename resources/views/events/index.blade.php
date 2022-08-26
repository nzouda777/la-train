@extends('layouts.master', ['title' => 'events'])


@section('content')
    <h1>Events</h1>

    {{-- @foreach ($events as $event)
        <li> {{ $event }}</li>
    @endforeach --}}
    @forelse ($events as $event)
        <li>{{ $event }}</li>
    @empty
        <p>Pas d'evenement pour le moment</p>
    @endforelse
@endsection
