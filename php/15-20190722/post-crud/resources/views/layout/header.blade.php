<div class="container my-3 ">
    <div class="row">
        <div class="col-4 d-flex justify-content-start">
            <form action="{{asset('posts')}}" method="get">
                <button class="btn btn-outline-primary font-weight-bold ">HOME</button>
            </form>
        </div>
        <div class="col-4 text-center">
            <h1><a class="card-link" href="{{asset('posts')}}"> POSTS-CRUD </a></h1>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <form action="{{asset('posts/create')}}" method="get">
                <button class="btn btn-outline-primary font-weight-bold ">Create Post</button>
            </form>
        </div>
    </div>
</div>
<hr>