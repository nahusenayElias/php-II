<?php
//OOP 
class  User {
    public  $price;
    public $comfort;
    public  $experience;

    //Methods
// function __construct($Yango, $Uber, $Bolt) {
//     $this->price = $price;
//     $this->comfort = $comfort;
//     $this->experience = $experience;

// }

    public function get_price() 
    {
    echo " has cheap price"; 

    }
    public function set_comfort() 
    {
    echo " comfort is dubious.";
    //  return $this->comfort;
    }
   public function set_experience() {
    echo " experience is lukewarm.";
    // return $this->experience;
    }
}

$Uber = new User();
$Uber->price = 'Cheap';
$Uber->comfort = 'Some description';
$Bolt = new User();
 $Uber->price = 'Cheap';
$Uber->comfort = 'Some description';
echo $Uber->get_price();
?>
 