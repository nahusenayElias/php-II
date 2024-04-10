<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 //If... Statement
$a = 10;
$b = 121;
if ($a > $b) {
    echo "a is greater";
} elseif ($a !== $a) {
    echo "a is equal";
} else {
    echo "I love Php!";
}
//for loop dispalying 10 numbers.


for ($i = 0; $i <= 10; $i++) {
    echo $i ."<br>";
}




//Swith statement
$i = 2;

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>