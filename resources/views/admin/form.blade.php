<div>
    <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $restaurant->name }}">
    @error('name') <p style="color: red">{{ $message }}</p> @enderror 
</div>
<div class="row">
    <label for="image">Restaurant Image</label>
    <input type="file" class="form-control-file" id="image" name="image">
    @error('image') <p style="color: red">{{ $message }}</p> @enderror
</div>


    @csrf