<?php
$title = 'functions';
function sum($a, $b){
    $result = $a + $b;
    return $result;

}
echo '###';
$result = sum(1, 3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <th><? echo $result; ?></th>
        <th>two</th>
        <th>three</th>
       </tr>
    
</body>
</html>