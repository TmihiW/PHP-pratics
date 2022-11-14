
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Functions Page</title>
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
  ?>
  <hr></hr>
</head>
<body>  
<br></br>
<?php
echo'function registerUser(){<br>    echo \'User registered\';<br>}<br>registerUser();<br><br>';
echo'output:<br>';
function registerUser(){
    echo 'User registered';
}
registerUser();
?>
<hr></hr>
<br></br>
<?php
echo'function outSource(){<br>    $y=4;<br>    echo \'New y = \'.$y.\'br>\';<br>}<br>$y=2;<br>echo \'Oldest y = \'.$y.\'br>\';<br>outSource();<br>echo \'Newest y = \'.$y;<br><br>';
echo'output:<br>';
function outSource(){
    $y=4;
    echo 'New y = '.$y.'<br>';
}
$y=2;
echo 'Oldest y = '.$y.'<br>';
outSource();
echo 'Newest y = '.$y;
?>
<hr></hr>
<br></br>
<?php
echo'function outSource2(){<br>    global $y;<br>    echo \' Old y =  \'.$y .\'br>\';<br>    $y=4;<br>    echo \'New y = \'.$y.\'br>\';<br>}<br>$y=2;<br>echo \'Oldest y = \'.$y.\'br>\';<br>outSource2();<br>echo \'Newest y = \'.$y;<br><br>';
echo'output:<br>';
function outSource2(){
    global $y;
    echo ' Old y =  '.$y .'<br>';
    $y=4;
    echo 'New y = '.$y.'<br>';
}
$y=2;
echo 'Oldest y = '.$y.'<br>';
outSource2();
echo 'Newest y = '.$y;
?>
<hr></hr>
<br></br>
<?php
echo'function registerEmail($email){<br>    echo $email. \' registered\';<br>}<br>$email=\'\'kadirfindik3871@gmail.com\'\';<br>registerEmail($email);<br><br>';
echo'output:<br>';
function registerEmail($email){
    echo $email. ' registered';
}
$email='\'kadirfindik3871@gmail.com\'';
registerEmail($email);
?>
<hr></hr>
<br></br>
<?php
echo'function sum($n1,$n2){<br>    return $n1+$n2;<br>}<br>echo sum(1,2);<br><br>';
echo'output:<br>';
function sum($n1,$n2){
    return $n1+$n2;
}
echo sum(1,2).'<br>';
echo '1 + 2  = '.sum(1,2) .'<br>';
?>
<hr></hr>
<xmp>
<form method="post">
Sayı1: <input type="number"  name="s1" /><br>
Sayı2: <input type="number"  name="s2" /><br>
<input type="submit" name="add"value="Sum">
</form>
</xmp>
<?php echo'if(isset($_POST["add"])){<br>    $p1=$_POST[\'s1\'];<br>    $p2=$_POST[\'s2\'];<br>    echo \'Sum is: \'.sum($p1,$p2);<br>};<br><br>';?>

<form method="post">
Sayı1: <input type="number"  name="s1" /><br>
Sayı2: <input type="number"  name="s2" /><br>
<input type="submit" name="add"value="Sum">
</form>
<?php 
echo'output:<br>';
if(isset($_POST["add"])){
    $p1=$_POST['s1'];
    $p2=$_POST['s2'];
    echo 'sum is: '.sum($p1,$p2);
};
?>
<hr></hr>
<br></br>
<?php
echo'$sub = function ($r1,$r2){<br>    return $r1-$r2;<br>};<br>echo \'sub is: \'.$sub($p1,$p2);<br><br>';
echo'output:<br>';
$sub = function ($r1,$r2){
    return $r1-$r2;
};
if(isset($_POST["add"])){
echo 'sub is: '.$sub($p1,$p2);
};

?>
<hr></hr>
<br></br>
<?php
echo'$mul = fn($m1,$m2)=>$m1*$m2;<br>echo \'mul is: \'.$mul($p1,$p2);<br><br>';
echo'output:<br>';
$mul = fn($m1,$m2)=>$m1*$m2;
if(isset($_POST["add"])){
echo 'mul is: '.$mul($p1,$p2);
};
?>
<hr></hr>


</body>
</html>