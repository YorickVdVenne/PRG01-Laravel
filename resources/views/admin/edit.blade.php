<h1>Edit Restaurant Details</h1>

<form method="post" action="/admin/{{$restaurant->id}}" >

    @method('PATCH')

    @include('admin.form')

    <button>Save Restaurant</button>
    
</form> 