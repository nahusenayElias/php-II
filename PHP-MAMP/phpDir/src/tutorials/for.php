<?php

$title = 'for loop';

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
    <title>for loop</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PHP Basics: <?= $title; ?></a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">My Favourite Guitars</h1>


            </div>
        </div>
        <div class="row">
        <style>
        table, th, td {
            border: 1px solid black;
            background: lightgray;
        }
    </style>
        <!-- <table style="width: 65%"> -->
            <table class="table table-striped"> 
                <?php
                for ($i = 0; $i < 10; $i++) {
                    ecHo "<tr><td>$i</td></tr>";

                }
                ?>

<?php

for ($i = 0; $i < count($favGuitars); $i++ ){
    $guitars = $favGuitars[$i];
    ecHo "<tr><td>$guitars</td></tr><br>";
    
    
}
?>
<?php
//While loop 
$i = 0;
while ($i < count($favGuitars)) {
      $guitars = $favGuitars[$i];
    ecHo "<tr><td>$guitars</td></tr><br>";
    $i++;

}
?>    

            </table>
        </div>
    </div>
    
    
</body>
</html>