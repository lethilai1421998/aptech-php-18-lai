@extends('layout.index')
@section('sidebar')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-9 py-3">
                    <div class="panel panel-default py-3">
                        <div class="main-left  btn-success" style="background-color:cornflowerblue">
                            <h2> <a class="text-white px-3 card-link" href="{{asset('articles')}}">
                                    Articles-Category</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-8 py-3">
                    @foreach($articles as $article)
                    <div class="row-item row">
                        <div class="col-md-3">
                            <img class="card-img-top rounded-circle " src="{{$article->image_path}}}" alt="This is a picture" style="width:200px;height:200px;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                @foreach($article->categories as $category)
                                <p class=" badge badge-primary">{{$category->name}}</p>
                                @endforeach
                                <h2 class="card-title"><a class="text-dark mx-3 " href="{{asset('articles/'.$article->slug)}}">{{$article->title}}</a></h2>
                                <p class="card-text">{{$article->description}}</p>
                                <a href="{{asset('articles/'.$article->slug)}}" class="card-link">Continue Reading
                                    ...</a>
                            </div>
                            <p class="text-muted d-flex justify-content-end">{{$article->view}} viewed</p>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 col-none col-sm-block ">
                    <ul class="list-group" id="menu">
                        <li href="#" class="list-group-item menu1 active">
                            Tin nổi bật
                        </li>
                        <li class="list-group-item">
                            @foreach ($hotarticles as $hotarticle)
                            <h4><a href="{{asset('articles/'.$article->slug)}}">{{$hotarticle->title}}</a></h4>
                            <p>{{$hotarticle->description}}</p>
                            @endforeach
                        </li>
                    </ul>
                    <br>
                    <div class="row main-left">
                        <div class="col-md-12 col-none col-sm-block ">
                            <ul class="list-group" id="menu">
                                <li href="#" class="list-group-item menu1 active">
                                    Quảng Cáo
                                </li>
                                <li class="list-group-item">
                                    @foreach ($articles as $article)
                                    <p><a href="{{asset('articles/'.$article->slug)}}">{{$article->description}}</a></p>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">{{$articles->links()}}</div>
@endsection