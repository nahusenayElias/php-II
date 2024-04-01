<?php

/* 
  Write you php code here

   */

$best_sellers = array("Chocolate", "Mint", "Fudge");

// // for loop
// for ($i = 0; $i < count ($best_sellers); $i++) {
//   echo $best_sellers[$i] . "<br>";
// }






  

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <p><?php foreach ($best_sellers as $items) {
  echo $items. "<br>"; 
}
?>
</p>
</body>

</html>