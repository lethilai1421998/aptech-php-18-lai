@extends('app')
@section('sidebar')
<div class="card my-3" style="100%">
  <div class="d-flex justify-content-between">
    <div class="col-4">
      <img class="card-img-top rounded-circle " src="{{$article->image_path}}}" alt="This is a picture" style="width:200px;height:200px;">
    </div>
    <div class="card-body">
      <h2 class="card-title">{{$article->title}}</h2>
      <p class="card-text">{{$article->description}}</p>
    </div>
  </div>
  <div class="row my-3">
    <div class="col-12">
      {!!$article->content!!}
    </div>
  </div>
  <div class="d-flex justify-content-end mx-3 my-3">
    <form action="{{asset('articles/'.$article->slug.'/edit')}}" method="GET">
      <button type="submit" class="btn btn-primary mx-1">Update</button>
    </form>
  </div>
  @endsection