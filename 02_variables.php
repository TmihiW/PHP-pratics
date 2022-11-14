
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Variables Page</title>
  <form action="00_main.php" method="post">     
  <button >Main Page</button> 
  </form>
  <?php if(isset($_GET['prev'])){
  $pr = $_GET['prev'];
  echo "<a href='$pr'><button id='back'>Back</button></a>";
}?>
  <hr></hr>
  <!--  
  <a href="01_output.php">|Output Page|</a>
  <a href="02_variables.php">|Variables Page|</a>
  <a href="03_arrays.php">|Arrays Page|</a>
  <a href="04_conditionals.php">|Conditionals Page|</a>
  <a href="05_loops.php">|Loops Page|</a>
  <a href="06_functions.php">|Functions Page|</a>
  <a href="07_array_functions.php">|Array Functions Page|</a>
  <a href="08_string_functions.php">|String Functions Page|</a>
  <a href="09_superglobals.php">|Super Globals Page|</a>
  <a href="10_get_post.php">|Get Post Page|</a>
  <a href="11_sanitize_inputs.php">|Sanitize Inputs Page|</a>
  <a href="12_cookies.php">|Cookies Page|</a>
  <hr></hr>
  -->  
  <?php 
   $a = $_SERVER['PHP_SELF'];
   echo "<a href='01_output.php?prev=$a'>|Output Page| </a>";
   echo "<a href='02_variables.php?prev=$a'>|Variables Page| </a>";
   echo "<a href='03_arrays.php?prev=$a'>|Arrays Page| </a>";
   echo "<a href='04_conditionals.php?prev=$a'>|Conditionals Page| </a>";
   echo "<a href='05_loops.php?prev=$a'>|Loops Page| </a>";
   echo "<a href='06_functions.php?prev=$a'>|Functions Page| </a>";
   echo "<a href='07_array_functions.php?prev=$a'>|Array Functions Page| </a>";
   echo "<a href='08_string_functions.php?prev=$a'>|String Functions Page| </a>";
   echo "<a href='09_superglobals.php?prev=$a'>|Super Globals Page| </a>";
   echo "<a href='10_get_post.php?prev=$a'>|Get Post Page| </a>";
   echo "<a href='11_sanitize_inputs.php?prev=$a'>|Sanitize Inputs Page| </a>";
   echo "<a href='12_cookies.php?prev=$a'>|Cookies Page| </a>";
  ?>
  <hr></hr>
</head>
<body>
  
<br></br>
<?php
echo'$name= \'Kadir\';<br>$age = 25;<br>echo $name.$age;<br><br>';
echo'output:<br>';
$name= 'Kadir';
$age = 25;
echo $name.$age;
?>
<hr></hr>
<br></br>
<?php
echo'echo $name.\' is \'.$age.\' years old. \';<br><br>';
echo'output:<br>';
echo $name.' is '.$age.' years old. ';
?>
<hr></hr>
<br></br>
<?php
echo'echo "$name is $age years old.";<br><br>';
echo'output:<br>';
echo "$name is $age years old.";
?>
<hr></hr>
<br></br>
<?php
echo'echo "${name} is ${age} years old.";<br><br>';
echo'output:<br>';
echo "${name} is ${age} years old.";
?>
<hr></hr>
<br></br>
<?php
echo'define(\'HOST\',\'localhost\');<br>define(\'BD_NAME\',\'my_db\');<br>echo HOST,\' \',BD_NAME;<br><br>';
echo'output:<br>';
define('HOST','localhost');
define('BD_NAME','my_db');
echo HOST,' ',BD_NAME;
?>

<hr></hr>
</body>
</html>
