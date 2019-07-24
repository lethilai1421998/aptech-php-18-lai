
   @extends('users.app')
   @section('sidebar')
   @parent
   <table class="table table-dank table-striped table-hover table-bordered text-center">
       <thead>
           <tr>
               <th>
                   ID
               </th>
               <th>Name</th>
               <th>Email</th>
               <th>Action</th>
           </tr>
       </thead>
       @foreach($users as $usre)
       <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
       </tr>
       <td>
    <div class="d-flex justify-content-around">
           <form action="{{asset('users/'.$user->id)}}" method="GET">
            <button type="submit" class="btn btn-success">Show</button>
           </form>
           <form action="{{asset('users/'.$user->id.'/edit')}}" method="GET"> 
            <button type="submit" class="btn btn-primary">Update</button>
           </form>
           <form action="{{asset('users/'.$user->id)}}" method="POST">
           <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <button type="submit" class="btn btn-warning">Delete</button>
           </form>
           </div>
    </td>
       @endforeach
   </table>
   <div class="d-flex justify-content-center">{{$users->links()}}</div>
    @section('content')
    <form action="{{asset('/users/create')}}" method="GET">
          <button type="submit" class="btn btn-success">Add User</button>
        </form>
        @endsection
@endsection