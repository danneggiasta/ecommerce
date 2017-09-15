@extends('layouts.manage')

@section('content')
    <div class="col-lg-9 mt-5 ml-5">
        <div class="panel panel-default">
            <div class="panel-heading mb-5">
                <h1>Create New User</h1>
            </div>

            <hr>

            <div class="panel-body">
                <form action="{{route('users.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Manually give a password to user" id="password" :disabled="auto_password">
                        <b-form-checkbox name="auto_generate" :checked="true" v-model="auto_password">Auto
                            Generate Password
                        </b-form-checkbox>
                    </div>
                    <button type="submit" class="btn btn-success">Create User</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true
            }
        });
    </script>
@endsection