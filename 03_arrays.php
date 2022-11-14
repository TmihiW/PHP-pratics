
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arrays Page</title>
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
  ?>
  <hr></hr>
</head>
<body>
  

<br></br>
<?php
echo'$numbers = [1,14,34,38];<br>print_r($numbers);<br><br>';
echo'output:<br>';
$numbers = [1,14,34,38];
print_r($numbers);
?>
<hr></hr>
<br></br>
<?php
echo'$fruits= array(\'apple\',\'orange\');<br>var_dump($fruits);<br><br>';
echo'output:<br>';

$fruits= array('apple','orange');
var_dump($fruits);
?>
<hr></hr>
<br></br>
<?php
echo'echo $fruits[0];<br><br>';
echo'output:<br>';
echo $fruits[0];
?>
<hr></hr>
<br></br>
<?php
echo'$colors = [<br>    1=> \'red\',<br>    4=> \'blue\',<br>    6=> \'green\',<br>];<br>echo $colors[4];<br><br>';
echo'output:<br>';
$colors = [
    1=> 'red',
    4=> 'blue',
    6=> 'green',
];
echo $colors[4];
?>
<hr></hr>
<br></br>
<?php
echo'for ($i = 0; $i <= count($numbers)-1; $i++) {<br>    echo $numbers[$i].\' \';    <br>}<br><br>';
echo'output:<br>';
for ($i = 0; $i <= count($numbers)-1; $i++) {
    echo $numbers[$i].' ';    
}
?>
<hr></hr>
<br></br>
<?php
echo'$hex = [<br>    \'red\'=> \'\#f00\',<br>    \'blue\' => \'#0f0\',<br>    \'green\' => \'#00f\'<br>];<br>echo $hex [\'blue\'];<br><br>';
echo'output:<br>';
$hex = [
    'red'=> '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
echo $hex ['blue'];
?>
<hr></hr>
<br></br>
<?php
echo'$person =[<br>    \'first_name\' => \'Kadir\',<br>    \'last_name\' => \'Fındık\',<br>    \'email\'=> \'kadirfindik3871@gmail.com\'<br>];<br>echo $person[\'email\'];<br><br>';
echo'output:<br>';
$person =[
    'first_name' => 'Kadir',
    'last_name' => 'Fındık',
    'email'=> 'kadirfindik3871@gmail.com'
];

echo $person['email'];
?>
<hr></hr>
<br></br>
<?php
echo'$students=[<br>    [<br>        \'first_name\' => \'Kadir\',<br>        \'last_name\' => \'Findik\',<br>        \'email\'=> \'kadirfindik3871@gmail.com\'<br>    ],<br>    [<br>        \'first_name\' => \'Ahmet\',<br>        \'last_name\' => \'Yildiz\',<br>        \'email\'=> \'ahmetyildiz@gmail.com\'<br>    ]<br>];<br>print_r([json_encode($students)]);<br><br>';
echo'output:<br>';
$students=[
    [
        'first_name' => 'Kadir',
        'last_name' => 'Findik',
        'email'=> 'kadirfindik3871@gmail.com'
    ],
    [
        'first_name' => 'Ahmet',
        'last_name' => 'Yildiz',
        'email'=> 'ahmetyildiz@gmail.com'
    ]
];

//echo $students[1]['email'];
print_r([json_encode($students)]);
?>
<hr></hr>
<br></br>
<?php
echo'echo $students[1][\'first_name\'];<br><br>';
echo'output:<br>';
echo $students[1]['first_name'];
?>


<hr></hr>
</body>
</html>


