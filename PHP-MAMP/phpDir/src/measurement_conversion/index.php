<?php

//  Celisius to Fahrenheit 

//Celsius to Fahrenheit ° F = 9/5 ( ° C) + 32
function celsius_to_fahren( int $value) :int  {
    $fahrenheit = 9/5 * ($value) + 32;
     return $fahrenheit;
}


function celisus_to_kelvin (int $given_value) :int {

 $kelvin = $given_value + 273.15;
	return $kelvin;
}
// Convert kilometers per hour to meters per second

function kmph_to_mps($kmph) 
    { 
        return floor(0.277778 * $kmph); 

    } 

// Convert kilometers per hour to knots
function kmph_to_knts($kmp1) {
return floor( $kmp1 * 0.5399568035);
}

//Convert kilogram to grams
function kg_to_gm($kg) {
return floor( $kg * 1000);
}
    


//Convert grams to kilograms
function gm_to_kg($gm) {
    return floor( $gm * 0.001);
    }

?>

<h1> <?php echo "Today's temperature in Fahrenheit is " . celsius_to_fahren(15) . ", Thank you!"; 
?></h1>

<!-- Convert temperature from Celsius to Kelvin -->

<h1> <?php echo "Today's temperature in Kelvin is " . celisus_to_kelvin(15) . ", Thank you!"; 
?></h1>
<h1> <?php echo " " . kmph_to_mps(80) . ""; 
?></h1>
<h1> <?php echo " " . kmph_to_knts(80) . ""; 
?></h1>
<h1> <?php echo " " . kg_to_gm(80) . ""; 
?></h1>

<h1> <?php echo " " . gm_to_kg(80000) . ""; 
?></h1>

