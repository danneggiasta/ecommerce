@extends('layouts.manage')

@section('content')
    <div class="col-lg-9 mt-5 ml-5">
        <div class="panel panel-default">
            <div class="panel-heading mb-5">
                <a href="{{route('users.create')}}" class="btn btn-info pull-right"><i class="fa fa-user-plus mr-2"></i>Create
                    New User</a>
                <h1>Manage Users</h1>
            </div>

            <div class="panel-body">
                <table class="table bg-light">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>DATE CREATED</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td><a href="{{route('users.show', $user->id)}}" class="btn btn-outline-warning btn-sm">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{$users->links()}}
    </div>



@endsection