@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/search" method="POST" role="search">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="search" autocomplete="off"
                placeholder="Search restaurants"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
    <div class="row">
        <h1>Restaurants</h1>
    </div>
    
    Filter:
    <a href="/restaurants/?category=Pizza">Pizza</a> |
    <a href="/restaurants/?category=Sushi">Sushi</a> | 
    <a href="/restaurants/?category=Burgers">Burgers</a> |
    <a href="/restaurants/?category=Chinees">Chinees</a> |
    <a href="/restaurants/?category=Kip">Kip</a> |
    <a href="/restaurants/?category=Surinaams">Surinaams</a> |
    <a href="/restaurants/?category=Thais">Thais</a> |
    <a href="/restaurants/?category=Grieks">Grieks</a> |
    <strong><a href="/restaurants">Reset</a> |</strong>

    <div class="row pt-5">
            <div>
                @forelse($restaurants as $restaurant)
                <p><strong>
                <a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
                </strong></p>
                <p><strong>
                {{ $restaurant->category }}
                </strong></p>
                <p><strong>
                    <img src="/storage/{{ $restaurant->image }}" class="w-50">
                </strong></p>
                @empty
                    <p>No Restaurants to show</p>
                @endforelse
            </div>
    </div>
</div>
@endsection
