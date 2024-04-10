<?php

$variable = 'foreach';

$favGuitars = [
    'Vela', 'Exp', 'Str'
];
$kvpGuitars = [
    'prs' => 'Vela',
    'Gibson' => 'Expl',
    'Fender' => 'Str'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP fundamentals</title>
</head>
<body>
    <h1>PHP Basics</h1>
    <style>
        table, th, td {
            border: 1px solid black;
            background: lightgray;
        }
    </style>
    <table style="width: 65%">
       <tr>
        <th>one</th>
        <th>two</th>
        <th>three</th>
       </tr>
       <tr>
        <th><? echo $variable; ?></th>
        <th><? echo $favGuitars[1]; ?></th>
        <th><? echo $favGuitars[2]; ?></th>

       </tr>
       <tr>
       <th><? echo $favGuitars[2]; ?></th>
       <th><? echo $favGuitars[1]; ?></th>
       <th><? echo $favGuitars[0]; ?></th>
       </tr>
</table>
<br>
<table>
<?php
foreach($favGuitars as $guitar) {
     echo "<tr><td>$guitar</td></tr>"; 
     echo "<br>"; 
}
?>
</table>
<table>
<?php
foreach($kvpGuitars as $key => $guitar) {
     echo "<tr><td>$key</td><td>$guitar</td></tr>";  
}
?>
</table>
 
<style>

    </style>
</body>
</html>