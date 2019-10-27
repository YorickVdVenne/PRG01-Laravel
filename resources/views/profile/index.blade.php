@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Profile Page</h1>
                </div>

                <div class="panel-body">
                    <p><strong>{{ $user->name }}</strong></p>
                        

                    <p><strong>{{ $user->email }}</strong></p>
                       
                    <div>
                    <!-- <p><strong>{{ $user->profile->address }}</strong></p> -->
                        
                        <a href="/profile/{{ $user->id}}/edit">Edit</a>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection
