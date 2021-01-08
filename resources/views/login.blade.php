@extends('layouts.app')
<title>Login</title>
@section('content')
    <div class="signup">
        <form method = "POST" action="{{url('/home/login')}}" style="width: 60%;">
            @csrf
            <h3><b>Login</b></h3>
            <div class="row">
                <label for="name" class="col-sm-4 col-form-label"><b>Username</b></label><br>
                <input type="text" id = "name" class = "col-sm-7 form-control" name = "name" placeholder = "Enter your username..">
            </div>
            <div class="row">
                <label for="password" class="col-sm-4 col-form-label"><b>Password</b></label><br>
                <input id="password" type="password" class="col-sm-7 form-control" name="password" placeholder = "Enter your password..">
            </div>
            <div class="form-group justify-content-center">
                <div class="btn-signup" >
                    <button type="submit" class="btn btn-outline-dark">
                        Login
                    </button>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection
