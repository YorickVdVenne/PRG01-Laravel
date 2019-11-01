@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>

    <div>
        <a href="/admin/users"> < Back</a>
    </div>

    <strong>Name</strong>
    <p>{{ $user->name }}</p>

    <strong>Email</strong>
    <p>{{ $user->email }}</p>

    <div>
        <a href="/admin/users/{{ $user->id}}/edit">Edit</a>

        <form method="post" action="/admin/users/{{ $user->id }}">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </div>
</div>
@endsection 