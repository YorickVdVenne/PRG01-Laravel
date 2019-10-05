<h1>Edit Customer Details</h1>

<form method="post" action="/customers/{{$customer->id}}" >

    @method('PATCH')

    @include('customer.form')

    <button>Save Customer</button>
    
</form> 