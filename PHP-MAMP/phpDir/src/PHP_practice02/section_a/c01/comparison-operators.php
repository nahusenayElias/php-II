<?php

/* 
  Write you php code here

   */

  $quantity_stock = 100;
  $quantity_wanted = 90;

  $comarison_op = $quantity_wanted <= $quantity_stock;
  

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>The output will be here empty if the outcome is 0 and 1 will be shown if it is true! <?= $comarison_op ?> </p>

</body>

</html>