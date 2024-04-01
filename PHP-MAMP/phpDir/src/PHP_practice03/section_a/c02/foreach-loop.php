<?php
/* 
    Write your code here
     */
    $candy_products = [$Fudge = 3.49,
    $Toffee = 2.99,
    $Mint = 1.99];

  ?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
    /* 
    Write your code here

     */
    foreach ($candy_products as $candy => $value) : ?>   
      <tr>        
      <td><?php echo $candy; ?><td>        
      <td><?php echo $value; ?></td>      
      </tr>    
      <?php endforeach; ?>
  </table>
</body>

</html>