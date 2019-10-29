@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{URL::to('/search')}}" method="post" role="search">
    @csrf 
    <form class="form-inline ">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
    </form>
   <div class="row">
       <h1>Restaurants</h1>
   </div>
   <div class="row pt-5">
        <div>
            @forelse($restaurants as $restaurant)
            <p><strong>
            <a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
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
