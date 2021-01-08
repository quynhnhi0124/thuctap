@extends('layouts.app')
<title>Homepage</title>
@section('content')
@if(Route::has('login'))
    Hi {{Auth::user()->name}}
    <form action="/logout">
        <button class="btn btn-outline-dark">Logout</button>
    </form>
@else
    <p>Dang nhap di</p>
@endif
@endsection
