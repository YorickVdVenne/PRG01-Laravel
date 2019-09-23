@extends('app')

@section('title','Restaurants')

@section('content')
    <h1>Welcome to the restaurants page</h1>

    <form action="">
        <input type="text" name="name" autocomplete="off">

        <button>Add Restaurant</button>
    </form>

    <ul>
        @forelse($restaurants as $restaurant) 
            <li>{{ $restaurant->name }}</li>
        @empty
            <li>No restaurants are currently available.</li>
        @endforelse 
    </ul>
@endsection
