@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Restaurants</h1>
        </div>
            You are logged is as admin
        <div class="row">
            <ul><a href="/admin/restaurants/create">Add new Restaurant</a></ul>
        </div>
        <div>
            @forelse($restaurants as $restaurant)
            Name:
            <p><strong>
                <a href="/admin/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
            </strong></p>
            Category:
            <p><strong>
            {{ $restaurant->category }}
            </strong></p>
            <p><strong>
                <img src="/storage/{{ $restaurant->image }}">
            </strong></p>
            @empty
                <p>No Restaurants to show</p>
            @endforelse
        </div>
    </div>
@endsection