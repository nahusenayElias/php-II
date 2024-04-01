<?php
/* Write your code here */

$stock = 3;
$ordered = 9;
if ($stock > 0) {
  $message = 'in stock';
} elseif ($ordered > 0) {
  $message = 'Coming soon ...';
 } else {
    $message = 'Sold out!';
  }

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p> Display the status of product is: <?= $message ?> </p>

  <?php
  /* Write your code here */
  ?>
</body>

</html>