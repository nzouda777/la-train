@extends('layouts.master', ['title' => 'About'])

@section('content')
    <h1>About Page</h1>
@endsection
@section('footer')
    Master &copy; 2022
@endsection

@push('scripts.footer')
    <script src="https://code.jquery.com/jquery.min.js"></script>
@endpush
