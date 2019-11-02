@extends('layouts.app')

@section('content')
<div class="container">

    <div>
        <a href="/restaurants"> < Back</a>
    </div>

    <h1>{{ $restaurant->name }}</h1>
    <p><img src="/storage/{{ $restaurant->image }}" class="w-25"></p>

    <strong>Category</strong>
    <p>{{ $restaurant->category }}</p>

</div>
@endsection