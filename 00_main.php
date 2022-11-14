
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My PHP Website</title>
  <form action="00_main.php" method="post">     
  <button >Main Page</button> 
  </form>
  <?php if(isset($_GET['prev'])){
  $pr = $_GET['prev'];
  echo "<a href='$pr'><button id='back'>Back</button></a>";
}?>
  <hr></hr>
   <!--  
  <a href="01_output.php">|Output|</a>
  <a href="02_variables.php">|Variables|</a>
  <a href="03_arrays.php">|Arrays|</a>
  <a href="04_conditionals.php">|Conditionals|</a>
  <a href="05_loops.php">|Loops|</a>
  <a href="06_functions.php">|Functions|</a>
  <a href="07_array_functions.php">|Array Functions|</a>
  <a href="08_string_functions.php">|String Functions|</a>
  <a href="09_superglobals.php">|Super Globals|</a>
  <a href="10_get_post.php">|Get Post|</a>
  <a href="11_sanitize_inputs.php">|Sanitize Inputs|</a>
  <a href="12_cookies.php">|Cookies|</a>
  <a href="13_sessions.php">|Sessions|</a>
  <a href="14_file_handling.php">|File Handling|</a>
  <hr></hr>
  -->    
  <?php 
   $a = $_SERVER['PHP_SELF'];
   echo "<a href='01_output.php?prev=$a'>|Output| </a>";
   echo "<a href='02_variables.php?prev=$a'>|Variables| </a>";
   echo "<a href='03_arrays.php?prev=$a'>|Arrays| </a>";
   echo "<a href='04_conditionals.php?prev=$a'>|Conditionals| </a>";
   echo "<a href='05_loops.php?prev=$a'>|Loops| </a>";
   echo "<a href='06_functions.php?prev=$a'>|Functions| </a>";
   echo "<a href='07_array_functions.php?prev=$a'>|Array Functions| </a>";
   echo "<a href='08_string_functions.php?prev=$a'>|String Functions| </a>";
   echo "<a href='09_superglobals.php?prev=$a'>|Super Globals| </a>";
   echo "<a href='10_get_post.php?prev=$a'>|Get Post| </a>";
   echo "<a href='11_sanitize_inputs.php?prev=$a'>|Sanitize Inputs| </a>";
   echo "<a href='12_cookies.php?prev=$a'>|Cookies| </a>";
   echo "<a href='13_sessions.php?prev=$a'>|Sessions| </a>";   
   echo "<a href='14_file_handling.php?prev=$a'>|File Handling| </a>";   
  ?>
  <hr></hr>
</head>
<body>
  <br></br>
<span style="color:red">&lt;?php</span>
  <span style="color:mediumblue">WELCOME</span>
  <span style="color:brown">TO </span>THE
  <span style="color:orange">MAIN</span>
  <span style="color:green">PAGE</span>
  <span style="color:red">?&gt;</span>
  <br></br>
  <hr></hr>
  <br></br>
<br></br>
<?php
echo 'Welcome to PHP Pratics';

?>

<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>

</body>
</html>