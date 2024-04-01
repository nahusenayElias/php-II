<?php
$text = "Home sweet home";


?>
<?php include 'includes/header.php'; ?>

<p>
  /** Write your code here */
<br>
<?php echo strtoupper($text); ?> <br>
<?php echo strtolower($text); ?> <br>
<?php echo strlen($text); ?> <br>
<?php echo str_word_count($text); ?> <br>

  
</p>

<?php include 'includes/footer.php'; ?>