<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
$products=[
["iphone",1999],
["iphone",1999],
["iphone",1999],
];
?>
 <table border =1 cellspacing=0 cellpading=0 style="width:50%;">
<thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
<tr>
    <th>1</th>
    <td> <?php echo $products[0][0] ?> </td>
    <td> <?php echo "$".$products[0][1] ?> </td>
</tr>
<tr>
        <th>2</th>
        <td><?php echo $products[1][0] ?></td>
        <td><?php echo "$".$products[1][1] ?></td>
</tr>
<tr>
<th>3</th>
    <td><?php echo $products[2][0] ?></td>
    <td><?php echo "$".$products[2][1] ?></td>
</tr>
</table>
</body>
</html>