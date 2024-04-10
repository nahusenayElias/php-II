<?php
$person = array("Edison", "Wankel", "Crapper", "Anna");
$creator = array ('Light bulb' => 'Edison', 'Rotary Engine' => 'Wankel', 'Toilet' => 'Crapper', 'Writter' => 'Anna');

sort($person);

// echo "{$person}";

foreach ($person as $name) {
    echo "Hello, {$name} <br/>";
}

foreach ($creator as $invention => $inventor) {
    echo "{$inventor} invented the {$invention} <br/>";
}
//This function sorts associative array in ascending order.
// asort($creator);

//is_array() - tests whether a value is an array or not. 

if (!is_array($person)){
    echo "woof!";
} else {
    echo "meow";
}

?>