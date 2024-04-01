<?php
/*Write your code here*/
$stock = 0;
$ordered = 0;

$message = ($stock > 0) ? 'in stock' : 'sold out';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p>Currently we have <b>products: <?= $message ?> </b></p>
  <?php
  /* Write your code here */

  ?>
</body>

</html>