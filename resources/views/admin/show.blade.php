@extends('layouts.app')

@section('content')
    <h1>Restaurant Details</h1>

    <div>
        <a href="/admin"> < Back</a>
    </div>

    <strong>Name</strong>
    <p>{{ $restaurant->name }}</p>

    <strong>Image</strong>
    <p><img src="/storage/{{ $restaurant->image }}"></p>

    <div>
        <a href="/admin/{{ $restaurant->id}}/edit">Edit</a>

        <form method="post" action="/admin/{{ $restaurant->id }}">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </div>
@endsection 