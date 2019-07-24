
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
$arr = ['ID', 'NAME', 'EMAIL',''];
?>
<table class="table table-dark table-striped text-center table-striped table-hover table-bordered">

<tr>
<?php
for ($i = 0; $i < count($arr); $i++) {
    echo "<th>" . $arr[$i] . "</th>";
}

?>
</tr>


@foreach($users as $user)

<div>
  <!-- <a href="http://localhost/aptech-php-18-namnh/php/07-20190628/model/public/users/{{$user->id}}">{{$user->email}}
  -->
  <!-- <a href={{asset('users/'.$user->id)}}>{{$user->email}} </a> -->
<tr>
<td>  {{$user->id}}</td> 
<td> {{$user->email}}</td> 
<td> {{$user->name}}</td>
<td>
<form action="{{asset('users/'.$user->id)}}" method="GET">
    <button type="submit">Xem Chi Tiet</button>
  
  <form action="{{asset('users/'.$user->id)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <button type="submit">Xoa</button>
 
  <form action="{{asset('users/'.$user->id.'/edit')}}" method="GET">
    <button type="submit">edit</button>
  </form></form>
  </form>
  @endforeach
  </td>
  </tr>
  </table>

</div>


</body>
</html>

