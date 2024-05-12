<?php

require('functions.php');
$title = 'Hello model';

$view_bag = [];
$view_bag['title'] = 'This is title';

// echo $title;
view('index', $title);
