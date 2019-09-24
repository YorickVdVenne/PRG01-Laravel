@extends('app')

@section('title','Restaurants')

@section('content')
    <h1>Welcome to the restaurants page</h1>

    <form action="/restaurant" method="post">
        <input type="text" name="name" autocomplete="off">

        @csrf

        <button>Add Restaurant</button>
    </form>
    <p style="color: red">@error('name') {{ $message }} @enderror</p>
    <ul>
        @forelse($restaurants as $restaurant) 
            <li>{{ $restaurant->name }}</li>
        @empty
            <li>No restaurants are currently available.</li>
        @endforelse 
    </ul>
@endsection
