<?php
/*
Write your code here
*/


$candy = 0;
 
if ($candy > 0) {
  $output= 'In stock!';
 } elseif 
   ($candy === 0) {
    $output = 'sold out';
 
 }

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  
  <?php
  /* Write your code here */
echo $output;
  ?>
</body>

</html>