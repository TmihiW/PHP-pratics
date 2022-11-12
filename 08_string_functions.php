
<!DOCTYPE html>
<html lang="en">
<head>
  <title>String Functions Page</title>
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
  
<br></br>
<?php
echo'$s=\'TmihiW\';<br>echo strlen($s);<br><br>';
echo'output:<br>';
$s='TmihiW';
echo strlen($s);
?>
<hr></hr>
<br></br>
<?php
echo'echo strpos($s,\'i\');<br><br>';
echo'output:<br>';
echo strpos($s,'i');
?>
<hr></hr>
<br></br>
<?php
echo'echo strrpos($s,\'i\');<br><br>';
echo'output:<br>';
echo strrpos($s,'i');
?>
<hr></hr>
<br></br>
<?php
echo'echo strrev($s);<br><br>';
echo'output:<br>';
echo strrev($s);
?>
<hr></hr>
<br></br>
<?php
echo'echo strtolower($s);<br><br>';
echo'output:<br>';
echo strtolower($s);
?>
<hr></hr>
<br></br>
<?php
echo'echo strtoupper($s);<br><br>';
echo'output:<br>';
echo strtoupper($s);
?>
<hr></hr>
<br></br>
<?php
echo'echo ucwords(strtolower($s));<br><br>';
echo'output:<br>';
echo ucwords(strtolower($s));
?>
<hr></hr>
<br></br>
<?php
echo'echo str_replace(\'T\',\'Hi\',$s);<br><br>';
echo'output:<br>';
echo str_replace('T','Hi',$s);
?>
<hr></hr>
<br></br>
<?php
echo'echo substr($s,1,4);<br><br>';
echo'output:<br>';
echo substr($s,1,4);
?>
<hr></hr>
<br></br>
<?php
echo'echo substr($s,1);<br><br>';
echo'output:<br>';
echo substr($s,1);

?>
<hr></hr>
<br></br>
<?php
echo'echo substr($s,0,3).\' | \'. substr($s,3);<br><br>';
echo'output:<br>';
echo substr($s,0,3).' | '. substr($s,3);
?>
<hr></hr>
<br></br>
<?php
echo'if(str_starts_with($s,\'T\')){<br>    echo \'yes\';<br>}<br><br>';
echo'output:<br>';
if(str_starts_with($s,'T')){
    echo 'yes';
}
?>
<hr></hr>
<br></br>
<?php
echo'if(str_ends_with($s,\'W\')){<br>    echo \'yes\';<br>}<br><br>';
echo'output:<br>';
if(str_ends_with($s,'W')){
    echo 'yes';
}
?>
<hr></hr>
<br></br>
<?php
echo'$s2=\' '.htmlspecialchars("<h1>").'Hi '.htmlspecialchars("</h1>").'\';<br>echo $s2; <br><br>';
echo'output:<br>'; 
$s2='<h1>Hi</h1>';
echo $s2; 
?>
<hr></hr>
<br></br>
<?php
echo'$s3=\'""\';<br>$s4=\''.htmlspecialchars("<script>").'alert(\'."$s3".\')'.htmlspecialchars("</script>").'\';<br>echo htmlspecialchars($s4);<br><br>';
echo'before:<br>';
$s3='""';
$s4='<script>alert('."$s3".')</script>';
echo htmlspecialchars($s4);
?>
<br></br>
<xmp>
<form method="post">   
Uyarı: <input type="string" name="s1" /><br>
<input type="submit" name="alert"value="Uyar">
</form>
</xmp>
<?php
echo'if(isset($_POST["alert"])){<br>    $s3=\'"\';<br>    $s3.=$_POST["s1"];<br>    $s3.=\'"\';<br>$s4=\''.htmlspecialchars("<script>alert('.\"\$s3\".') </script>").'\';<br>    echo $s4;<br>};<br><br>';
?>
<form method="post">
Alert: <input type="string" name="s1" /><br>
<input type="submit" name="alert"value="Send">
</form>
<?php

if(isset($_POST["alert"])){
    $s3='"';
    $s3.=$_POST["s1"];
    $s3.='"';
    $s4='<script>alert('."$s3".')</script>';
    echo $s4;
};
echo'<br>if(isset($_POST["alert"])){<br>    echo htmlspecialchars($s4);<br>}else{<br>    echo htmlspecialchars($s4);<br>}<br><br>';
echo'<br>after:<br>';
if(isset($_POST["alert"])){
    echo htmlspecialchars($s4);
}else{
    echo htmlspecialchars($s4);
}

?>
<hr></hr>
<br></br>
<?php
echo'printf(\'%s\\\'s sirname is %s\',\'Kadir\',\'Findik\');<br><br>';
echo'output:<br>';
printf('%s\'s sirname is %s','Kadir','Findik');
?>
<hr></hr>
<br></br>
<?php
echo'printf(\'1+1=%f\',1+1);<br><br>';
echo'output:<br>';
printf('1+1=%f',1+1);
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
</body>
</html>