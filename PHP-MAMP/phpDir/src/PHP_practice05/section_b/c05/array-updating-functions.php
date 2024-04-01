<?php
// Write your code here

?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>
<?php

$item= ['notebook', 'pencil', 'eraser'];
array_unshift($item, 'scissors');
var_dump($item); 
 
array_shift($item)."\n";
print_r($item);

?>

// Write your code here

<?php include 'includes/footer.php'; ?>