<?php


$expire = time()+(60*60*24*7); // 1 hour expiry
$value = "cookie value - string or interger";
setcookie("cookie_name", $value, $expire,"/", "your_domain.com", 0);



//  $cookie_name = 'Joe Doe';
// $cookie_value = time() + (60*60*24*7);

// setcookie('cookie_name', 'this is the cookie value', $cookie_value);
 ?>

<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
  // $cookie_name = 'user';
  // $cookie_value = 'Heins Manscher';

  // setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");

  //check the cookie

  if (!isset($_COOKIE[$expire])) {
    echo "Cookie named ". $expire . " is not set!";}
     else {
echo "Cookie " . $expire . "is set! <br>";
echo "Value is: " . $_COOKIE[$expire];
    }
  
  

?>

<h2><a href="9.php?value=3223"> click here </a></h2>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>