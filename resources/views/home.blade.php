@extends('layouts.app')
<title>Homepage</title>
@section('content')
Hi {{Auth::user()->name}}
@endsection
