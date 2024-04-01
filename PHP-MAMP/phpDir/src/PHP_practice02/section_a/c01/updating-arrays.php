<?php

/* 
  Write you php code here

   */
  $nutrition = array("fat"=>"6%", "sugar"=>"6%", "salt" => "8%");

  $nutrition["sugar"] = "9%";


?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)<h2>
    <p>updated  arrays<?= $nutrition["sugar"] ?></p>
    <p>updated  arrays<?= $nutrition["fat"] ?></p>
    <p>updated  arrays<?= $nutrition["salt"] ?></p>


</body>

</html>