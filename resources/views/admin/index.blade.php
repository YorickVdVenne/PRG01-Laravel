@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Admin Page</h1>
        </div>
            You are logged is as admin
        <div>
            <a href="/admin/restaurants">Go to Restaurants overview</a>
        </div>
        <p></p>
        <div>
            <a href="/admin/users">Go to Users overview</a>
        </div>
    </div>
@endsection