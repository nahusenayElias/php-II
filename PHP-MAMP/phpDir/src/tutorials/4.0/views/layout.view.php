<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics <?= $view_bag['title']; ?></title>
    <!-- <link rel="stylesheet" href="app/style.css">
    <link rel="stylesheet" href="app/index.html"> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PHP: <?= $view_bag['title']; ?></a>
        </div>
    </nav>
    <?= require ("$name.view.php"); ?>
    
</body>
</html>