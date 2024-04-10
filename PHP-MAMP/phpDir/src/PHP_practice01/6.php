<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

<?php

		/*  Step1: Make a form that submits one value to POST super global


 */


 if(isset($_POST['submit'])) {
  $email = $_POST['email'] ?? "";
  echo $email;
 }


?>
<form action="7.php" method="POST">
 <input type="text" name= "fname">
 <input type="submit" value="Submit">
 </form>


  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>