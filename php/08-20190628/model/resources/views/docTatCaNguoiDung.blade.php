<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


    <?php
$arr = ['ID', 'NAME', 'EMAIL','PASSWORD'];
?>
<table class="table table-dark table-striped text-center table-striped table-hover table-bordered">
<thead>
<tr>
<?php
for ($i = 0; $i < count($arr); $i++) {
    echo "<th>" . $arr[$i] . "</th>";
}

?>
</tr>
</thead>
<tbody>
<?php
for ($i = 0; $i < count($nguoi_dung); $i++) {
    echo "<tr>";
    echo "<td>" . $nguoi_dung[$i]->id . "</td>";
    echo "<td>" . $nguoi_dung[$i]->name . "</td>";
    echo "<td>" . $nguoi_dung[$i]->email . "</td>";
    echo "<td>" . $nguoi_dung[$i]->password . "</td>";
}
echo "</tr>";
?>
</table>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </body>
</html>