@extends('app')
@section('sidebar')
      <form action="{{asset('/categories')}}" method="post">
      {{ csrf_field() }}
        <input type="text" name="name" class="form-control" placeholder="Name">
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
@endsection