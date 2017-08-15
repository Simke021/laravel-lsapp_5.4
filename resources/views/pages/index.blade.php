@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is my first Laravel Application</p>
        <p><a class="btn btn-primary btn-lg" role="button" href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a> <a class="btn btn-success btn-lg" role="button" href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i>
 Register</a> </p>
    </div>
@endsection

