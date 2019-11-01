@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit User Details</h1>

        <a href="/admin/users/{{$user->id}}"> < Back</a>

        <form method="post" action="/admin/users/{{$user->id}}">

            @method('PATCH')

            @include('admin.user.form')

            <button>Save Restaurant</button>
            
        </form> 
    </div>
@endsection