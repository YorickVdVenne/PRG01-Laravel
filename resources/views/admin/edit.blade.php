@extends('layouts.app')

@section('content')
    <h1>Edit Restaurant Details</h1>

    <form method="post" action="/admin/{{$restaurant->id}}" enctype="multipart/form-data">

        @method('PATCH')

        @include('admin.form')

        <button>Save Restaurant</button>
        
    </form> 
@endsection