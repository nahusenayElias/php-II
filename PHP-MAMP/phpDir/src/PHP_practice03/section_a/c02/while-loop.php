<?php
/* Write your code here */
// $one_pack = 1.99;

// while ($one_pack  < 6):
//   echo $one_pack;
  
//  $one_pack++ . "<br>";

$item_cost = 1.99;
 $total_cost = 0;
 $item_count = 0;
 
 while ($item_count < 5){
     $total_cost += $item_cost;
     $item_count += 1; 
 }
 



?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
 echo $total_cost;

    ?>
  </p>
</body>

</html>