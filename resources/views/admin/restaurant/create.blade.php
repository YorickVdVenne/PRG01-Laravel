@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add new Restaurant</h1>

        <form method="post" action="/admin/restaurants" enctype="multipart/form-data">

            @include('admin.restaurant.form')

            <button>Add New Restaurant</button>

        </form> 
    </div>
@endsection