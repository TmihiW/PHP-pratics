<!DOCTYPE html>
<html lang="en">
<head>
  <title>String Functions Page</title>
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
echo'<br>if(isset($_POST["alert"])){<br>    echo htmlspecialchars($s4);<br>}else{<br>    echo htmlspecialchars($s4);<br>}<br><br>';

if(isset($_POST["alert"])){
    $s3='"';
    $s3.=$_POST["s1"];
    $s3.='"';
    $s4='<script>alert('."$s3".')</script>';
    echo $s4;
};
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
echo'printf(\'1+1=%d\',1+1);<br><br>';
echo'output:<br>';
printf('1+1=%d',1+1);
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
<?Php 
echo htmlspecialchars("<form action=\"09_superglobals.php\" method=\"post\">").'<br>'.htmlspecialchars("<input type=\"hidden\" name=\"message\" value=").'&lt?php echo $s3;?&gt><br>'.htmlspecialchars("<input type=\"input\" name=\"user\" value=\"from previous page\">").'<br>'.htmlspecialchars("<button type=\"submit\"name=\"sendMessage\">Next Page</button>").'<br>'.htmlspecialchars("</form>").'<br><br>';
echo 'Output will be next page\'s end<br><br>';
?>

<form action="09_superglobals.php" method="post">     
    <input type="hidden" name="alertPrevious" value=<?php echo $s3;?>>
    Message to next page: 
    <input type="input" name="message" value="from previous page">
    <button type="submit"name="sendMessage">Next Page</button>
    <br><br>Also you can send alert from this page<br><br>
</form>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
</body>
</html>