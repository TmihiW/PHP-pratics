
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array Functions Page</title>
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
echo'$fruits=[\'apple\',\'orange\',\'pear\'];<br>echo count($fruits);<br><br>';
echo'output:<br>';
$fruits=['apple','orange','pear'];
echo count($fruits);

?>
<hr></hr>
<br></br>
<?php
echo'var_dump(in_array(\'apple\',$fruits));<br>echo \' br>\';<br>var_dump(in_array(\'banana\',$fruits));<br>$a=in_array(\'apple\',$fruits);<br>$b=in_array(\'banana\',$fruits);<br>echo \' br>\';<br>if($a==1){<br>  echo \'Has apple br>\';<br>}<br>else{<br>  echo\'Hasn\\\'t apple br>\'; <br>} <br>if($b==1){<br>  echo \'Has banana br>\';<br>}<br>else{<br>  echo\'Hasn\\\'t banana br>\';<br>}<br><br>';
echo'output:<br>';
var_dump(in_array('apple',$fruits));
echo '<br>';                              
var_dump(in_array('banana',$fruits));
$a=in_array('apple',$fruits);
$b=in_array('banana',$fruits);
echo '<br>';
if($a==1){
  echo 'Has apple<br>';
}
else{
  echo'Hasn\'t apple<br>';
}
if($b==1){
  echo 'Has banana<br>';
}
else{
  echo'Hasn\'t banana<br>';
}
?>
<hr></hr>
<br></br>
<?php
echo'print_r($fruits);<br>$fruits[]=\'banana\';<br>echo\' br>\';<br>print_r($fruits);<br>echo\' br>\';<br>$b=in_array(\'banana\',$fruits);<br>if($b==1){<br>  echo \'Has banana br>\';<br>}<br>else{<br>  echo\'Hasn\\\'t banana br>\';<br>}<br><br>';
echo'output:<br>';
print_r($fruits);
$fruits[]='banana';
echo'<br>';
print_r($fruits);
echo'<br>';
$b=in_array('banana',$fruits);
if($b==1){
  echo 'Has banana<br>';
}
else{
  echo'Hasn\'t banana<br>';
}
?>
<hr></hr>
<br></br>
<?php
echo'array_pop($fruits);<br>print_r($fruits);<br><br>';
echo'output:<br>';
array_pop($fruits);
print_r($fruits);
?>
<hr></hr>
<br></br>
<?php
echo'array_push($fruits,\'banana\');<br>print_r($fruits);<br><br>';
echo'output:<br>';
array_push($fruits,'banana');
print_r($fruits);
?>
<hr></hr>
<br></br>
<?php
echo'array_pop($fruits);<br>array_unshift($fruits,\'banana\');<br>print_r($fruits);<br><br>';
echo'output:<br>';
array_pop($fruits);
array_unshift($fruits,'banana');
print_r($fruits);
?>
<hr></hr>
<br></br>
<?php
echo'array_shift($fruits);<br>print_r($fruits);<br><br>';
echo'output:<br>';
array_shift($fruits);
print_r($fruits);
?>
<hr></hr>
<br></br>
<?php
echo'unset($fruits[1]);<br>print_r($fruits);<br><br>';
echo'output:<br>';
unset($fruits[1]);
print_r($fruits);
?>
<hr></hr>
<br></br>
<?php
echo'$chunked_fruits = array_chunk($fruits,1);<br>print_r($chunked_fruits);<br>echo\' br>\';<br>print_r($chunked_fruits[0]);<br>echo\' br>\';<br>print_r($chunked_fruits[1]);<br><br>';
echo'output:<br>';
$chunked_fruits = array_chunk($fruits,1);
print_r($chunked_fruits);
echo'<br>';
print_r($chunked_fruits[0]);
echo'<br>';
print_r($chunked_fruits[1]);
?>
<hr></hr>
<br></br>
<?php
echo'$arr1=[1,2];<br>$arr2=[4,5,6];<br>$arr3=array_merge($arr1,$arr2);<br>print_r($arr3);<br>echo\' br>\';<br>$arr4=[...$arr1,...$arr2];<br>print_r($arr4);<br><br>';
echo'output:<br>';
$arr1=[1,2];
$arr2=[4,5,6];
$arr3=array_merge($arr1,$arr2);
print_r($arr3);
echo'<br>';
$arr4=[...$arr1,...$arr2];
print_r($arr4);
?>
<hr></hr>
<br></br>
<?php
echo'$a=[<br>  \'first_name\',<br>  \'last_name\',<br>  \'email\',<br>];<br>$b=[<br>  \'kadir\',<br>  \'findik\',<br>  \'kadirfindik3871@gmail.com\'<br>];<br>$c=array_combine($a,$b);<br>print_r($c);<br>echo \' br>\';<br>echo $c[\'first_name\'];<br><br>';
echo'output:<br>';
$a=[
  'first_name',
  'last_name',
  'email',
];
$b=[
  'kadir',
  'findik',
  'kadirfindik3871@gmail.com'
];
$c=array_combine($a,$b);
print_r($c);
echo '<br>';
echo $c['first_name'];
?>
<hr></hr>
<br></br>
<?php
echo'$keys=array_keys($c);<br>print_r($keys);<br><br>';
echo'output:<br>';
$keys=array_keys($c);
print_r($keys);
?>
<hr></hr>
<br></br>
<?php
echo'$flipped=array_flip($c);<br>print_r($flipped);<br><br>';
echo'output:<br>';
$flipped=array_flip($c);
print_r($flipped);
?>
<hr></hr>
<br></br>
<?php
echo'$numbers=range(1,5);<br>print_r($numbers);<br><br>';
echo'output:<br>';
$numbers=range(1,5);
print_r($numbers);
?>
<hr></hr>
<br></br>
<?php
echo'$newNumbers=array_map(function($n){<br>  return "Number ${n}";<br>},$numbers);<br>print_r($newNumbers);<br><br>';
echo'output:<br>';
$newNumbers=array_map(function($n){
  return "Number ${n}";
},$numbers);
print_r($newNumbers);
?>
<hr></hr>
<br></br>
<?php
echo'$newC=array_map(function($v){<br>  return "Value: ${v}";<br>},$c);<br>print_r($newC);<br><br>';
echo'output:<br>';
$newC=array_map(function($v){
  return "Value: ${v}";
},$c);
print_r($newC);
?>
?>
<hr></hr>
<br></br>
<?php
echo'print_r($numbers);<br>echo\' br>\';<br>$lessThan3=array_filter($numbers,fn($k)=>$k<=3);<br>print_r($lessThan3);<br><br>';
echo'output:<br>';
print_r($numbers);
echo'<br>';
$lessThan3=array_filter($numbers,fn($k)=>$k<=3);
print_r($lessThan3);
?>
<hr></hr>
<br></br>
<?php
echo'$sum=array_reduce($lessThan3,fn($e,$n)=>$e+$n);<br>print_r($sum);<br><br>';
echo'output:<br>';
$sum=array_reduce($lessThan3,fn($e,$n)=>$e+$n);
print_r($sum);
?>
<hr></hr>
<br></br>


</body>
</html>