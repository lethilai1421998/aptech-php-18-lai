@extends('app')
@section('sidebar')
    <div class="row">
      <table class="table table-dark table-striped table-hover table-bordered text-center">
          <thead>
          <tr>
          <th>ID</th>
          <th>Name</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
    </td>
    </div>
        </tr>
        </table>
    </div>
@endsection
