<?php
/* Write your code here */
$price = 5;
$startPack = 50;
$endPack = 100;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    /* Write your code here */
    for ($startPack; $startPack <= $endPack; $startPack++) {
      echo "<p>Price for $startPack pack(s): $" . number_format($price * $startPack, 2) . "</p>";
    }
    ?>

    
  </p>
</body>

</html>