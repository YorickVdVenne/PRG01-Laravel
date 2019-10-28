@extends('layouts.app')

@section('content')
    <h1>Add new Restaurant</h1>

    <form method="post" action="/admin" enctype="multipart/form-data">

        @include('admin.form')

        <button>Add New Restaurant</button>

    </form> 
@endsection