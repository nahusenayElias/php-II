<?php

/* 
  Write you php code here

   */
  $name = "Mr. James";
  $greetings = "Thank you, ";
  $greeting_customer = $greetings . $name;

?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Mr. James's Order</h2>
  <p><?php echo $greeting_customer; ?></p>

</body>

</html>