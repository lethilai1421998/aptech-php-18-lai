@extends('app')
@section('sidebar')
      
      @foreach($articles as $article)
      <div class="card my-3" style="100%">
      <div class="col-4">
    <img class="card-img-top rounded-circle " src="{{$article->image_path}}}" alt="This is a picture" style="width:200px;height:200px;">
      </div>
    <div class="card-body">
    <h2 class="card-title">{{$article->title}}</h2>
    <p class="card-text">{{$article->description}}</p>
    <div class="d-flex justify-content-end">
           <form action="{{asset('articles/'.$article->slug)}}" method="GET">
            <button type="submit" class="btn btn-success mx-1">Show</button>
           </form>
           <form action="{{asset('articles/'.$article->id)}}" method="POST">
           <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <button type="submit" class="btn btn-warning mx-1">Delete</button>
           </form>
           <form action="{{asset('articles/'.$article->slug.'/edit')}}" method="get">
           <button type="submit" class="btn btn-success mx-1">update
           </div>
  </div>
  </div>
      @endforeach
      <div class="d-flex justify-content-center">{{$articles->links()}}</div>
@endsection