<!DOCTYPE html>
<html lang="en">
<head>
  <title>Loops Page</title>
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
echo'for($x=0;$x<10;$x++){<br>  echo $x;<br>}<br><br>';
echo'output:<br>';

for($x=0;$x<10;$x++){
  echo $x;
}
?>
<hr></hr>
<br></br>
<?php
echo'$y=1;<br>while($y<=3){<br>  echo $y.\' \';<br>  $y++;<br>}<br><br>';
echo'output:<br>';

$y=1;
while($y<=3){
  echo $y.' ';
  $y++;
}
?>
<hr></hr>
<br></br>
<?php
echo'$z=1;      <br>do{<br>  echo $z.\' \';<br>  $z++;<br>}while($z<=3);<br><br>';
echo'output:<br>';

$z=1;
do{
  echo $z.' ';
  $z++;
}while($z<=3);
?>
<hr></hr>
<br></br>
<?php
echo'$posts=[\'First\',\'Second\',\'Third\'];<br>for($x=0;$x< count($posts);$x++){<br>  echo $posts[$x].\' | \';<br>}<br><br>';
echo'output:<br>';

$posts=['First','Second','Third'];
for($x=0;$x< count($posts);$x++){
  echo $posts[$x].' | ';
}
?>
<hr></hr>
<br></br>
<?php
echo'foreach($posts as $post){<br>  echo $posts.\' \';<br>}<br><br>';
echo'output:<br>';
foreach($posts as $post){
  echo $post.' ';
}
?>
<hr></hr>
<br></br>
<?php
echo'foreach($posts as $index => $post){<br>  echo $index. \' - \'.$post.\' >br>\';<br>}<br><br>';
echo'output:<br>';
foreach($posts as $index => $post){
  echo $index + 1 . ' - '.$post.'<br>';
}
?>
<hr></hr>
<br></br>
<?php
echo'$person=[<br>  \'first_name\' => \'Kadir\',<br>  \'last_name\' => \'Findik\',<br>  \'email\' => \'kadirfindik3871@gmail.com\',<br>];<br>foreach($person as $key =>$value){<br>  echo "$key : $value <br> ";<br>}<br><br>';
echo'output:<br>';
$person=[
  'first_name' => 'Kadir',
  'last_name' => 'Findik',
  'email' => 'kadirfindik3871@gmail.com',
];
foreach($person as $key =>$value){
  echo "$key : $value <br> ";
}

?>
<hr></hr>
</body>
</html>


