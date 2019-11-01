@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/admin">< Go back to Admin page</a>
        <div class="row">
            <h1>Users</h1>
        </div>
        <div>
            @forelse($users as $user)
            Name:
            <p><strong>
                <a href="/admin/users/{{ $user->id }}">{{ $user->name }}</a>
            </strong></p>
            Email:
            <p><strong>
            {{ $user->email }}
            </strong></p>
            @empty
                <p>No Users to show</p>
            @endforelse
        </div>
    </div>
@endsection