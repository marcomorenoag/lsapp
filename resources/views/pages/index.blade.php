@extends('layouts/app')

@section('content')
    <div class="text-center">
        <h1>{{$title}}</h1>
        <p>This is a Laravel Application</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
        </p>
    </div>
@endsection