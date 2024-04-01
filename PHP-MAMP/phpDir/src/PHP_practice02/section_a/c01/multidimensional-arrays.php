<?php

/* 
  Write you php code here

   */
  $offers = array(
    array(
      "name" => "blue_candy",
      "price" => "€8",
      "stock_level" => 25,
    ),
    array(
      "name" => "red_candy",
      "price" => "€17",
      "stock_level" => 37,
    ),
    array(
      "name" => "caramel",
      "price" => "€5.50",
      "stock_level" => 100,
    ),
  );
  





?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <?php foreach ($offers as $offer); ?>
  <p><?php
echo "{$offer['name']} - {$offer['price']} - {$offer['stock_level']} - in stock"; ?>
  </p>

</body>

</html>