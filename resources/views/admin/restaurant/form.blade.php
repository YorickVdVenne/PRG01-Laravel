<div>
    <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $restaurant->name }}">
    @error('name') <p style="color: red">{{ $message }}</p> @enderror 
</div>
<div>
    <label for="category">Category</label>
    <select name="category">
        <option value=""> --Select--</option>
        <option value="Pizza">Pizza</option>
        <option value="Sushi">Sushi</option>
        <option value="Burgers">Burgers</option>
        <option value="Chinees">Chinees</option>
        <option value="Kip">Kip</option>
        <option value="Surinaams">Surinaams</option>
        <option value="Thais">Thais</option>
        <option value="Grieks">Grieks</option> 
    </select>
</div>
<div>
    <label for="image">Restaurant Image</label>
    <img src="/storage/{{ $restaurant->image }}">
    <input type="file" class="form-control-file" name="image">
    @error('image') <p style="color: red">{{ $message }}</p> @enderror
</div>
<p></p>
<div>
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id">
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </select>
</div>


<div>
    <label for="">Publish</label>
    <div class="checkbox">
        <input type="checkbox" name="publish" vlaue="1">
    </div>

    @csrf