<!DOCTYPE html>
<html lang="en">
<head>
  <title>Conditionals Page</title>
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

