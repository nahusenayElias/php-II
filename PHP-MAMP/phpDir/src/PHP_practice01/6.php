<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



  <form action="text" method="POST">
 <input type="text" name= "fname">
 <input type="submit" value="Submit">
 </form>


    <?php

		/*  Step1: Make a form that submits one value to POST super global


 */


 $name = $_POST["fname"];
 echo $name;


		?>


  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>