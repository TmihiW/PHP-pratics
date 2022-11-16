<?php include 'inc/header.php'; ?>
<title>Variables Page</title>
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
