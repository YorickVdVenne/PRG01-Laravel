@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/restaurants"> < Back</a>

    
    @if(isset($details))
        <h2>Search result for {{ $query }} is :</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $restaurant)
                <tr>
                    <td><a href="/restaurants/{{ $restaurant->id }}">{{$restaurant->name}}</a></td>
                    <td>{{$restaurant->category}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @if(isset($errorMessage))
       <br> {{ $errorMessage }}
    @endif
</div>
@endsection