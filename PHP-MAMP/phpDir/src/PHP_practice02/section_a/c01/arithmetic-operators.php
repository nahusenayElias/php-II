<?php

/* 
  Write you php code here

   */
  $item = 2;
  $cost = 5.5;
$subtotal = $cost * $item;
$tax = ($subtotal / 100) * 24;
$total = $subtotal + $tax;



?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
<p>Number of candy item was <?= $item ?> purchsed costs €<?= $cost ?> and the tax would be €<?= $tax ?> and total price is €<?= $total ?></p>

</body>

</html>