<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $a=18;
    if ($a<18)
    {
        echo "hihi";
    }
    else
    {
        echo"haha";
    }
    ?>
    <?php 
$products=[
["iphone",200],
["iphone",500],
["iphone",100],
];
?>
 <table border =1 cellspacing=0 cellpading=0 style="width:90%;">
<thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
    <?php
      $total = 0;
      for ($i = 0; $i < count($products); $i++) {
        if ($products[$i][1] > 500) {
          $price = $products[$i][1] + ($products[$i][1] / 10);
        } else {
          $price = $products[$i][1] + ($products[$i][1] / 20);
        }
        ?>
      <tr>
        <th><?php echo $i + 1 ?></th>
        <td><?php echo $products[$i][0] ?></td>
        <td><?php echo "$" . $price ?></td>
      </tr>
      <?php
        $total = $total + $price;
      } ?>
      <tr>
        <th>Total</th>
        <th colspan="2" ><?php echo $total ?></th>
      </tr>
</table>
</body>
</html>