
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
$arr = ['ID', 'NAME', 'EMAIL','PASSWORD'];
?>
<table class="table table-dark table-striped text-center table-striped table-hover table-bordered">

<tr>
<?php
for ($i = 0; $i < count($arr); $i++) {
    echo "<th>" . $arr[$i] . "</th>";
}

?>
</tr>
<div>
  
<tr>
<td>  {{$users->id}}</td> 
<td> {{$users->email}}</td> 
<td> {{$users->name}}</td>
<td> {{$users->password}}</td>

  </tr>
  </table>

</div>


</body>
</html>

