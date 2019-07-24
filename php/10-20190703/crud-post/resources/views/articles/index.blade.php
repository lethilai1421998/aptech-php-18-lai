@extends('layout.index')
@section('sidebar')
<div class="container">
  <div class="row">
    <div class="col-md-9 col-12">
<div class="row main-left">
<div class="panel-body">
                <!-- item -->
                <div class="col-12 my-3">
                <div class="panel panel-default">
                    <div class="  main-left btn btn-success" style="background-color:#337AB7; color:white;">
                        <a class="text-white px-3" href="{{asset('articles')}}"> Articles-Category</a>
                    </div>
                    @foreach($articles as $article)
                    <div class="row-item row">
                        <div class="col-md-3">
                            <a href="article.show">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="https://cdn.pixabay.com/photo/2016/07/28/02/02/greece-1546902__340.jpg" alt="">
                            </a>
                            <img class="card-img-top rounded-circle " src="{{$article->image_path}}}" alt="This is a picture" style="width:200px;height:200px;">
                        </div>
                        <div class="col-md-9">
                           <div class="card-body">
                        <h2 class="card-title"><a class="text-dark mx-3 card-link" href="{{asset('articles/'.$article->slug)}}">{{$article->title}}</a></h2>
                        <p class="card-text" >{{$article->description}}</p>
                        <a href="{{asset('articles/'.$article->slug)}}" class="card-link">Continue Reading ...</a>
                           </div>
                        <div class="break"></div>
                    </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div> 
    </div>
    <div class="col-md-3 col-sm-block d-none">
    @foreach($articles as $article)
    <div class="card-body">
    <h2 class="card-title">{{$article->title}}</h2>
</div>
    @endforeach
    </div>
@push('scripts')
    <script>
        $('#select2-multi').select2();
    </script>
@endpush
  </div>
</div>
      <div class="d-flex justify-content-center">{{$articles->links()}}</div>
@endsection


