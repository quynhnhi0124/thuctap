@extends('layouts.app')
<title>Homepage</title>
@section('content')
@if(Route::has('login'))
Hi {{Auth::user()->name}}
@endif
@endsection
