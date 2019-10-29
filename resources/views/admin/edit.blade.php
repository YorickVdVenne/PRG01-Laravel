@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Restaurant Details</h1>

        <a href="/admin/{{$restaurant->id}}"> < Back</a>

        <form method="post" action="/admin/{{$restaurant->id}}" enctype="multipart/form-data">

            @method('PATCH')

            @include('admin.form')

            <button>Save Restaurant</button>
            
        </form> 
    </div>
@endsection