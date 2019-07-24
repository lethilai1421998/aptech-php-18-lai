@extends('app')
@section('sidebar')
<form action="{{asset('/categories/' .$category->id )}}" method="post">
  <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$category->name}}">
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
@endsection