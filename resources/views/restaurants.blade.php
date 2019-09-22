@extends('app')

@section('title','Restaurants')

@section('content')
    <h1>Welcome to the restaurants page</h1>

    <p>Here are all the restaurants</p>
    <ul>
        @forelse($restaurants as $restaurants) 
            <li>{{ $restaurants }}</li>
        @empty
            <li>No restaurants are currently available.</li>
        @endforelse 
    </ul>
@endsection
