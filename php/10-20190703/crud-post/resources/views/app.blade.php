<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/select2-4.0.7/dist/css/select2.min.css')}}">
    <script src="{{asset('/select2-4.0.7/dist/js/select2.min.js')}}"></script>  
</head>
  <body>
      
 <!-- Navigation -->
 <header>
        <div class=" bg-light ">
            <div class="navbar navbar-expand-md">
                <div class="col-3 d-flex justify-content-between">
                    <div class="row ">
                        <div class="col-4">
                            <img src="https://pixabay.com/vi/photos/c%C3%A2y-c%E1%BB%95-th%E1%BB%A5-r%C6%A1i-l%C3%A1-s%C6%B0%C6%A1ng-m%C3%B9-bu%E1%BB%95i-s%C3%A1ng-4339191/"
                                style="height:32px; width:32px"></div>
                        <div class=" col-md-6 d-md-block d-none ">
                            <h3>Article-Category</h3>
                        </div>
                        <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			    </form>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row d-flex justify-content-end alight-items-center">
                        <div class="col-md-12 d-none d-md-block">
                            <h2 class=" card-text d-flex justify-content-end alight-items-center
                                            navbar-brand ">
                                <ul>
                                    <div class="list-unstyled d-flex m-0 my-4">
                                        <li>  <div class="col-2 d-flex justify-content-start">
              <form action="{{asset('articles')}}" method="get">
                <button class="btn  btn-outline-primary max-5 ">Articles</button>
            </form>
          </div></li>
          <li>  <div class="col-2 d-flex justify-content-start">
              <form action="{{asset('categories')}}" method="get">
                <button class="btn btn-outline-primary max-5 ">Category</button>
            </form>
            </div></li>
                                        <li> <div class="col-1 d-flex justify-content-end">
              <form action="{{asset('articles/create')}}" method="get">
                <button class="btn btn-outline-primary max-5 "> Create Articles</button>
            </form>
            </div></li>
                                        <li>  <div class="col-1 d-flex justify-content-end">
              <form action="{{asset('categories/create')}}" method="get">
                <button class="btn btn-outline-primary max-5 "> Create Category</button>
            </form>
            </div></li>
                                        <div class="row my-5">
            </div>
          </div>
                                    </div>
                                </ul>
                            </h2>
                        </div>
                        <div class="d-block d-md-none">
                            <div class="card-text navbar-brand px-0 ">
                                <nav class="row navbar navbar-dark justify-content-end">
                                    <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse"
                                        data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                                        aria-label="Toggle navigation">
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
                            <li class="bg-dark my-3 d-flex text-white">Home</li>
                            <li class=" my-3 d-flex ">Abouts Us</li>
                            <li class=" my-3 d-flex ">Help</li>
                            <li class=" my-3 d-flex ">Contact</li>
                        </ul>
                    </h2>
                </div>
            </div>
        </div>
    </header>
        <!-- end slide -->
      <div class="row my-5">
          <div class="col-2 d-flex justify-content-start">
              <form action="{{asset('articles')}}" method="get">
                <button class="btn  btn-outline-primary max-5 ">Articles</button>
            </form>
          </div>
            <div class="col-2 d-flex justify-content-start">
              <form action="{{asset('categories')}}" method="get">
                <button class="btn btn-outline-primary max-5 ">Category</button>
            </form>
            </div>
            <div class="col-6 text-center">
            <h1> Articles-Categories </h1>
          </div>
            <div class="col-1 d-flex justify-content-end">
              <form action="{{asset('articles/create')}}" method="get">
                <button class="btn btn-outline-primary max-5 "> Create Articles</button>
            </form>
            </div>
            <div class="col-1 d-flex justify-content-end">
              <form action="{{asset('categories/create')}}" method="get">
                <button class="btn btn-outline-primary max-5 "> Create Category</button>
            </form>
            </div>
            </div>
          </div>
          <hr>
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      @section('sidebar')
                      @show
                  </div>
              </div>
          </div>
          <hr>
          <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <p class="text-muted">©copy 2017-2019 Company,Inc</p>
                            <ul class="d-flex px-2 mx-1 list-unstyled">
                                <li><a class="px-2" href="">Privacy</a></li>
                                <li><a class="px-2" href="">Term</a></li>
                            </ul>
                        </div>
                        <a href="">Back to top</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  @stack('scripts')





  <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Khoa Pham</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#">Đăng ký</a>
                    </li>
                    <li>
                        <a href="#">Đăng nhập</a>
                    </li>
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        Menu
                    </li>

                    <li href="#" class="list-group-item menu1">
                        Level 1
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Panel heading without title</b></h4>
                    </div>

                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>Project Five</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                            <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>

                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div> 

        </div>

    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>

</body>
</html>