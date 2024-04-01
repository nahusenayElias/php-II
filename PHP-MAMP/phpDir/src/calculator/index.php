<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<h1>Calculator</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="number" name = "num01" placeholder="Number one"><br>
<!-- <input type="number" name = "num01" placeholder="Number one" required> 
The likes of "required" web security written from front-end must not be used as the only web security  as they can easily be removed by just right click and delete. Therefore, always do php security instead -->
<select name="operator" id="">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
</select><br>
 <input type="number" name="num02"
 placeholder="Number two" required> <br>
 <button>Calculate</button>
</form>
<?php


// OOP

class SimpleCalc {
    public function calculate($num01,$num02,$operator){

        switch($operator) {
            case "add": 
                $value = $num01 + $num02;
                break;
            case "subtract": 
                $value = $num01 - $num02;
                break;
            case "multiply": 
                $value = $num01 * $num02;
                break;
            case "divide": 
                $value = $num01 / $num02;
                break;
            default: 
                echo "<p class='calc-error'>Opps! Something went wrong!!</p>";
            
        }
        echo "<p class='calc-result'> Result = " . $value . "</p>";

    }
    }

    //Constructor
function __construct($num01, $num02, $operator) {
    $this->num01 = $num01;
    $this->num02 = $num02;
    $this->operator = $operator;
}
   // 


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);

    // Error Handlers

  $errors = false;

     if (empty($num01) || empty($num02) || empty($operator)) {
         echo "<p class='calc-error'>Please, fill in all fields!</p>";

        $errors = false;
     }
    if (!is_numeric($num01) || !is_numeric($num02)) {

        echo "<p class='calc-error'>Please, write numbers only!</p>";
         $errors = true;

    }
     //If no errors, calculate numbers.
     if(!$errors) {
         $value = 0;  //  TO avoid error message, we need to make sure 0 as a default and declare it here before the switch to later call it.


        switch($operator) {
            case "add": 
                $value = $num01 + $num02;
                break;
            case "subtract": 
                $value = $num01 - $num02;
                break;
            case "multiply": 
                $value = $num01 * $num02;
                break;
            case "divide": 
                $value = $num01 / $num02;
                break;
            default: 
                echo "<p class='calc-error'>Opps! Something went wrong!!</p>";
            
        }
        echo "<p class='calc-result'> Result = " . $value . "</p>";

    }
}
?>
</body>
</html>