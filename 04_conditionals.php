<!DOCTYPE html>
<html lang="en">
<head>
  <title>Conditionals Page</title>
  <a href="00_main.php">|Main Page|</a><hr></hr>
  <a href="01_output.php">|Output Page|</a>
  <a href="02_variables.php">|Variables Page|</a>
  <a href="03_arrays.php">|Arrays Page|</a>
  <a href="04_conditionals.php">|Conditionals Page|</a>
  <a href="05_loops.php">|Loops Page|</a>
  <a href="06_functions.php">|Functions Page|</a>
  <a href="07_array_functions.php">|Array Functions Page|</a>
  <a href="08_string_functions.php">|String Functions Page|</a>
  <a href="09_superglobals.php">|Super Globals Page|</a>
  <hr></hr>
</head>
<body>

<?php
echo '<br>$age=17;<br>if($age>=18){<br>    echo \'You are old enought to vote\';<br>}else {<br>    echo \'Sorry, you are too young to vote\';<br>}<br><br>';
echo'output:<br>';
$age=17;

if($age>=18){
    echo 'You are old enought to vote';
}else {
    echo 'Sorry, you are too young to vote';
}
?>
<hr></hr>
<br></br>
<?php
echo'$bugün=date("l");<br>echo \'Today is \' .$bugün. \'. \';<br>$yarın  = date("l",mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));<br>echo \'Tomorroy is \'.$yarın;<br><br>';
echo'output:<br>';
$bugün=date("l");
echo 'Today is ' .$bugün. '. <br>';

$yarın  = date("l",mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));
echo 'Tomorroy is '.$yarın;
?>
<hr></hr>
<br></br>
<?php
echo'$hi=date("H");<br>if($hi < 12) {    echo \'Good Morning\';<br>} elseif($hi < 17) {<br>    echo \'Good Afternoon\';<br>} else {<br>    echo \'Good Evening\';<br>}<br><br>';
echo'output:<br>';
$hi=date("H");

if($hi < 12) {
    echo 'Good Morning';
} elseif($hi < 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}
?>
<hr></hr>
<br></br>
<?php
echo'$posts = [\'First Post\'];<br>if(!empty($posts)){<br>    echo $posts[0];<br>}else{<br>    echo \'Null\';<br>}<br><br>';
echo'output:<br>';
$posts = ['First Post'];
if(!empty($posts)){
    echo $posts[0];
}else{
    echo 'Null';
}
?>
<hr></hr>
<br></br>
<?php
echo'echo !empty($posts) ? $posts[0] : \'Null\';<br><br>';
echo'output:<br>';
echo !empty($posts) ? $posts[0] : 'Null';
?>
<hr></hr>
<br></br>
<?php
echo'$firstBost =!empty($posts)?$posts[0]:null;<br>echo $firstBost;<br><br>';
echo'output:<br>';
$firstBost =!empty($posts)?$posts[0]:null;
echo $firstBost;
?>
<hr></hr>
<br></br>
<?php
echo'$posts2=[\'First Post\',\'Second Post\'];<br>$firstPost = $posts2[0] ?? null;<br>$secondPost = $posts2[1]??null;<br>$thirdPost=$posts2[2]??null;<br>echo $firstPost .\' \' . $secondPost.\'\'.$thirdPost;<br><br>';
echo'output:<br>';
$posts2=['First Post','Second Post'];
$firstPost = $posts2[0] ?? null;
$secondPost = $posts2[1]??null;
$thirdPost=$posts2[2]??null;
echo $firstPost .' ' . $secondPost.''.$thirdPost;
?>
<hr></hr>
<br></br>
<?php
echo'$favcolor = \'blue\';<br>switch($favcolor) {<br>    case \'red\':<br>        echo \'Your favorite color is red\';<br>        break;<br>    default:<br>        echo \'You have not any favorite color\';<br>}<br><br>';
echo'output:<br>';
$favcolor = 'blue';
switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    default:
        echo 'You have not any favorite color';

}
?>
<hr></hr>
</body>
</html>
<?php
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/
?>

