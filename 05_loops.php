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


