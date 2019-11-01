@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/admin">< Go back to Admin page</a>
        <div class="row">
            <h1>Restaurants</h1>
        </div>
        <div class="row">
            <ul><a href="/admin/restaurants/create">Add new Restaurant</a></ul>
        </div>
        <div>
            @forelse($restaurants as $restaurant)
            Name:
            <p><strong>
                <a href="/admin/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
            </strong></p>
            @empty
                <p>No Restaurants to show</p>
            @endforelse
        </div>
    </div>
@endsection