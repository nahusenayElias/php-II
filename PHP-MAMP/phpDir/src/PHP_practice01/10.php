<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog



		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/

  //Define a class 
   class Dog {

    //Properties
    public $eyeColor = "brown";
    public $breed = "Gold_retriever";
    public $furColor = "white";

    //Constructor Method
  public function __construct($eyeColor, $breed, $furColor) {
    $this->eyeColor = "brown";

    $this->breed = "Gold_retriever";
    $this->furColor = "white"; 
  } 
  // method to bark
  public function bark() {
    return "Woof!... Woof!";
  }
  public function showAll()
  {
    echo "Eye color: $this->eyeColor, Breed: $this->breed, Fur colour: $this->furColor";
  }

  

   }
   $pitbull = new Dog ("black", "gold_retriever", "white");
;

// // $pitbull->showAll();

echo $pitbull->bark() ."<br>";

echo $pitbull->showAll();
  
  

  