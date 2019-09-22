@extends('app')

@section('title','Restaurants')

@section('content')
    <h1>Welcome to the restaurants page</h1>

    <ul>
        @forelse($restaurants as $restaurant) 
            <li>{{ $restaurant->name }}</li>
        @empty
            <li>No restaurants are currently available.</li>
        @endforelse 
    </ul>
@endsection
