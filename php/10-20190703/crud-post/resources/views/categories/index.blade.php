@extends('app')
@section('sidebar')
    <div class="row">
      <table class="table table-dark table-striped table-hover table-bordered text-center">
          <thead>
          <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
          </tr>
          </thead>
          @foreach($categories as $category)
          <tbody>
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
        <td>
        <div class="d-flex mt-3 justify-content-center">
            <form class="mr-1" method="get" action="{{asset('categories/'.$category->id.'/edit')}}">
        <button type="submit" class="btn btn-warning">update</button>
        </form>
        <form class="mr-1" method="get" action="{{asset('categories/'.$category->id)}}">
        <button type="submit" class="btn btn-success">Show</button>
        </form>
        <form class="mr-1" method="post" action="{{asset('categories/'.$category->id)}}">
        <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-danger">Detele</button>
        </form>
        @endforeach
    </td>
    </div>
        </tr>
       
        </table>
       
    </div>

@endsection
