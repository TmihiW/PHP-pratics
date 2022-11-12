
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Variables Page</title>
  <a href="00_main.php">|Main Page|</a><hr></hr>
  <a href="01_output.php">|Output Page|</a>
  <a href="02_variables.php">|Variables Page|</a>
  <a href="03_arrays.php">|Arrays Page|</a>
  <a href="04_conditionals.php">|Conditionals Page|</a>
  <a href="05_loops.php">|Loops Page|</a>
  <a href="06_functions.php">|Functions Page|</a>
  <a href="07_array_functions.php">|Array Functions Page|</a>
  <a href="08_string_functions.php">|String Functions Page|</a>
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
