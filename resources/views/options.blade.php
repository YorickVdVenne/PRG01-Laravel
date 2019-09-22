@extends('app')

@section('title','Options')

@section('content')
    <h1>Welcome to the options page</h1>

    <p>Here are all the options</p>
    <ul>
        @forelse($options as $options) 
            <li>{{ $options }}</li>
        @empty
            <li>No options currently available.</li>
        @endforelse 
    </ul>
@endsection
