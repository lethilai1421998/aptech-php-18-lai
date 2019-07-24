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

<div>
<tr>
<div class="container ">
<div class="row">
<div class="col-md-6 col-md-offset-3">
    <div class="form-group">
        <h3>Form chỉnh sửa</h3>
<form action="{{asset('users/'.$users->id)}}" method="POST">
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div>
    <label for="">Name</label>
    <input type="text" name="name" class="form-control" value="{{$users->name}}">
  </div>
  <div>
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" value="{{$users->email}}" >
  </div>
  <button type="submit">Update</button>
</form>
  </td>
  </tr>
  </table>
</div>
</div>
</div>

</body>
</html>




