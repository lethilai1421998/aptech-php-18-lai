@extends('layout.index')
@section('sidebar')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-6 mt-3">
            <div class="card" style="height:100%;width:100%">
                <div class="card-body">
                    <h2 class="card-title"><a class="card-link" href="{{asset('posts/'.$post->slug)}}">{{$post->title}}</a></h2>
                    <p class="card-text">{{$post->description}}</p>
                    <div class="card-end">
                        <div class="d-flex justify-content-end">
                            <form action="{{asset('posts/'.$post->slug)}}" method="GET">
                                <button type="submit" class="btn btn-outline-success mx-1">Show</button>
                            </form>
                            <form action="{{asset('posts/'.$post->slug.'/edit')}}" method="get">
                                <button type="submit" class="btn btn-outline-warning mx-1">update
                                </button>
                            </form>
                            <form action="{{asset('posts/'.$post->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-outline-danger mx-1">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center my-3">{{$posts->links()}}</div>
@endsection