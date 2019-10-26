@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>FoodStar</h1>
        </div>
            You are logged is as admin
        <div class="row pt-4">
            Restaurants:
        </div>
        <div class="row">
            <ul><a href="/admin/restaurants/create">Add new Restaurant</a></ul>
        </div>
        <div>
            @forelse($restaurants as $restaurant)
            <p><strong>
                <a href="/admin/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
            </strong>({{ $restaurant->image }})</p>
            @empty
                <p>No Restaurants to show</p>
            @endforelse
        </div>
    </div>
@endsection