@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Restaurant Details</h1>

        <a href="/admin/restaurants/{{$restaurant->id}}"> < Back</a>

        <form method="post" action="/admin/restaurants/{{$restaurant->id}}" enctype="multipart/form-data">

            @method('PATCH')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $restaurant->name }}">
                @error('name') <p style="color: red">{{ $message }}</p> @enderror 
            </div>
            <div>
                <label for="category">Category</label>
                <select name="category">
                    <option value="{{ $restaurant->category }}">{{ $restaurant->category }}</option>
                    <option value="Pizza">Pizza</option>
                    <option value="Sushi">Sushi</option>
                    <option value="Burgers">Burgers</option>
                    <option value="Chinees">Chinees</option>
                    <option value="Kip">Kip</option>
                    <option value="Surinaams">Surinaams</option>
                    <option value="Thais">Thais</option>
                    <option value="Grieks">Grieks</option> 
                </select>
                @error('category') <p style="color: red">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="image">Restaurant Image</label>
                <img src="/storage/{{ $restaurant->image }}">
                <input type="file" class="form-control-file" name="image">
                @error('image') <p style="color: red">{{ $message }}</p> @enderror
            </div>
            <p></p>

            <div class="custom-control custom-switch ml-1">
                <input type="checkbox" class="custom-control-input" name="publish" id="publish">
                <label class="custom-control-label" for="publish">Publish Restaurant</label>
            </div>
<p></p>
    @csrf

            <button>Save Restaurant</button>
            
        </form> 
    </div>
@endsection