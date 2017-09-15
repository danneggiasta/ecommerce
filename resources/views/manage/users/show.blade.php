@extends('layouts.manage')

@section('content')
    <div class="col-lg-9 mt-5 ml-5">
        <div class="panel panel-default">
            <div class="panel-heading mb-5">
                <a href="{{route('users.edit', $user->id)}}" class="btn btn-info pull-right"><i class="fa fa-user-plus mr-2"></i>Edit User</a>
                <h1>View User Details</h1>
            </div>

            <hr>

            <div class="panel-body">
                <div class="form-group">
                    <b>Name</b>
                    <pre>{{$user->name}}</pre>
                     </div>
                <div class="form-group">
                    <b>Email</b>
                    <pre>{{$user->email}}</pre>
                 </div>
            </div>
        </div>
    </div>
@endsection