<?php
/* Write your code here */
 
//code credit: anonymous (clever techie)

function getChineseZodiac ($year)
{
  switch ($year % 12):
case 0:return 'Monkey';
case 1:return 'Rooster';
case 2:return 'Dog';
case 3:return 'Boar';
case 4:return 'Rat';
case 5:return 'Ox';
case 6:return 'Tiger';
case 7:return 'Rabit';
case 8:return 'Dragon';
case 9:return 'Snake';
case 10:return 'Horse';
case 11:return 'Lamb';
  endswitch;
}
echo getChineseZodiac(1983);
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <!-- <?= $best_offers ?> -->
  <?php
  /* Write your code here */
  $best_offers = array('Monday', 'Tuesday', 'Wenesday', 'last day of the week');
switch ($best_offers[array_rand($best_offers)]) {
 case 'Monday' : echo 'Chocolate 20% off';
 break;
 case 'Tuesday' : echo 'Mint on 20% off sale!';
 break;
 default: echo 'Buy three packs, get one for free!';
}

  ?>
</body>

</html>