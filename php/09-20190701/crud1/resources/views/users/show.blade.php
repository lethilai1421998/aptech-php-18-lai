@extends('users.app')
@section('sidebar')
@parent
<table class="table table-dark table-striped table-hover table-bordered text-center">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
    </thead>
    <tr>
    <td> {{$user->id}}
    </td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    </tr>
    @endsection
    
