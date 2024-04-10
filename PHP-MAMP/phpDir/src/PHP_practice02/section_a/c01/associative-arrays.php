<?php

/* 
  Write you php code here


   */


  $nutrition = array(
      "fat" => '18g',
      "sugar" => '12g',
      "salt" => '8g',
  );
?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <h2>Sugar: <?php echo $nutrition['sugar']; ?></h2>
  <h2>Fat: <?php echo $nutrition['fat']; ?></h2>
  <h2>Salt: <?php echo $nutrition['salt']; ?></h2>

</body>

</html>