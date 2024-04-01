<?php
// Write PHP code here



?>
<?php include 'includes/header.php'; ?>

 

<h1>Best Sellers</h1>
//Write code here
<?php
//Greetings in different languages.
$greetings = ['Hi', 'Howdy', 'Selamat', 'Namaste', 'Hola', 'Nihaw'];
$greetings_key = array_rand($greetings);
$greetings = $greetings[$greetings_key];
 echo $greetings; 
 ?>
 
 //Best selling items
 <?php

 $item = ['notebook', 'ink','pencil'];
 $item_count = count($item);
 $item_text = implode(',', $item);

//Array holding customer details
$customer = ['forename' => 'James','surname'=> 'Bond', 'email' => 'jamesbond@gmail.com'];
// If you have a customer firstname add it to greent
if(array_key_exists('forename', $customer)) {  $greetings .= $customer['forename'];}?><?php include 'includes/header.php'; ?><h1>Best Sellers</h1><p><?= $greeting ?></p><p>Our top <?= $bestsellers_count ?> items today are:  <b><?= $bestsellers_text ?> </b></p><?php include 'includes/footer.php'; ?>

//  echo $item_text;
//  ?>
//  <?php



// <?php include 'includes/footer.php'; ?>