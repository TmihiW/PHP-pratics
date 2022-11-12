<!DOCTYPE html>
<html lang="en">
<head>
  <title>Loops Page</title>
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

