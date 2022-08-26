
@extends('layouts.master', ['title' => 'Home'])

@section('content')
    <h1>Demo</h1>
        <!-- les condition avec blade -->
        {{-- @if ($isWeekend == true)
            {{ $first_name . " va t'amuser "}}
        @else
            {{$last_name . " va travailler"}}
        @endif --}}
        <!-- another way to do it -->
       @include('shared._weekend')

@endsection

@push('scripts.footer')
    <script src="https://unpkg.com/vue@next"></script>
@endpush
