<header>
    <div class=" bg-light ">
        <div class="navbar navbar-expand-md">
            <div class="col-4 d-flex justify-content-between">
                <div class="row ">
                    <div class="col-4">
                        <img src="https://scontent.fdad3-1.fna.fbcdn.net/v/t1.15752-9/67099728_461147137998582_4124829528142905344_n.png?_nc_cat=110&_nc_oc=AQnl9QZ9aHH-7xAXId3DikZXdM3ZBlEVqVON1JLlyQDUhdtfbjekR4awtRak73-q2zNpzGoYNF1my6Rh-UZK5hZ-&_nc_ht=scontent.fdad3-1.fna&oh=3b5963cabf786ac16c871d9a9c79b876&oe=5DAD74DD" style="height:32px; width:32px"></div>
                    <div class=" col-md-7 d-md-block d-none text-center">
                        <h3><a class="" href="{{asset('articles')}} "> ARTICLE_CATEGORY</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row d-flex justify-content-end alight-items-center">
                    <div class="col-md-12 d-none d-md-block">
                        <h2 class=" card-text d-flex justify-content-end alight-items-center
                                            navbar-brand ">
                            <ul>
                                <div class="list-unstyled d-flex m-0 my-4">
                                    <li><a class="px-3" href=" "> Tin tức </a></li>
                                    <li><a class=" px-3" href="">Sự kiên</a></li>
                                    <div class="dropdown show">
                                        <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Categories
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <ul class="list-unstyled">
                                                @foreach($categories as $category)
                                                <li><a class="text-dark mx-3" href="#">{{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div></a>
                                    <li>

                                        <button class="btn btn-outline-success m-3 " type="submit">
                                            Sign In
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-outline-primary m-3 " type="submit">
                                            Register
                                        </button>
                                    </li>
                                </div>
                            </ul>
                        </h2>
                    </div>
                    <div class="d-block d-md-none">
                        <div class="card-text navbar-brand px-0 ">
                            <nav class="row navbar navbar-dark justify-content-end">
                                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pos-f-t">
            <div class="collapse" id="navbarHeader">
                <h2 class="card-text ">
                    <ul class="list-unstyled">
                        <li class="bg-dark my-3 d-flex text-white">
                            <div class="list-unstyled d-flex m-0 my-4">
                                <form action="{{asset('articles')}}" method="get">
                                    <button class="btn  btn-outline-primary max-5 ">Articles</button>
                                </form>
                        </li>
                        <li class=" my-3 d-flex ">Tin tức</li>
                        <li class=" my-3 d-flex ">Sự Kiện</li>
                        <li class=" my-3 d-flex ">
                            <div class="dropdown show">
                                <a class="text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <ul class="list-unstyled">
                                        @foreach($categories as $category)
                                        <li><a class="text-dark mx-3" href="{{asset('categories/')}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </h2>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
</header>
<hr>
<hr>

<div class="fluid">
    <div class="row">
        <div class="col-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner ">
                    <div class="carousel-item ">
                        <img src="https://cdn.pixabay.com/photo/2016/12/01/18/17/mobile-phone-1875813__180.jpg" class="d-block w-100" height="350px;">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.
                            </h1>
                            <p>
                                kfj
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button"> Sign up
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="https://cdn.pixabay.com/photo/2019/05/24/17/41/castle-4226797__340.jpg" class="d-block w-100" height="350px;">
                        <div class="carousel-caption">
                            <h1>Another example headline.
                            </h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id
                                elit non mi
                                porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                vehicula
                                ut id
                                elit.
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn
                                    more</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="https://cdn.pixabay.com/photo/2019/05/06/07/40/sailing-vessel-4182424__340.jpg" class="d-block w-100" height="350px;">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.
                            </h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id
                                elit non mi
                                porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                vehicula
                                ut id
                                elit.
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn
                                    more</a>
                            </p>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden=" true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>