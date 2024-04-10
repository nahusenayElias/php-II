<?php
//Arrays
$guitars = array('Vela', 'Explorer
', 'Strat');
//echo would give a warning to print this array. we use print_r(). 

// print_r ($guitars); 
if(isset($guitars[3])) {
    echo "The guitar is " . $guitars[0] ;

} else {
    echo 'Guitar is not set <br>';
}
//Assocative array
$guitars2 = [
    'prs' => 'Vela', 'gibson' => 'Exp', 'fender' => 'Str'
];
ecHo $guitars2['prs'] . '<br>';

if(!isset($guitars2[3])) {
    echo "The guitar is " . $guitars[0] ;

} else {
    echo 'Guitar is not set <br>';
}