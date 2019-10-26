<div>
    <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $restaurant->name }}">
    @error('name') <p style="color: red">{{ $message }}</p> @enderror 

    <input type="file" name="image" id="image">
    @error('image') <p style="color: red">{{ $message }}</p> @enderror
    </div>

    @csrf