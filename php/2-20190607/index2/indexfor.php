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
$p=[
  ['iphone', 2000],
  ['iphone', 2000],
  ['iphone', 2000],
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
<?php
$t=0;
for($i=0;$i<count($p);$i++)
{
  ?>
  <tr>
  <th><?php echo $i+1 ?></th>
  <td><?php echo $p[$i][0] ?></td>
  <td> <?php echo "$" .$p[$i][1] ?></td>
  </tr>
  <?php
  $t=$t+$p[$i][1];
}?>
<tr>
<th>
total
</th>
<th colspan="2" styles="text-alight:right;">
<?php echo $t ?>
</th>
</tr>
</table>
</body>
