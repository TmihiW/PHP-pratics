
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Post Page</title>
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
</head> 
<body>
<?php

?>
<hr></hr>
<br></br>
<?php
echo '<br>Welcome to Get Post Page';
?>
<hr></hr>
<br></br>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Kadir">Click </a>
<?php
echo'<br>output:<br>';
if(isset($_GET['name'])){
  $name = $_GET['name'];
  echo $name;
}
?>
<hr></hr>
<br></br>
<form method="post"> 
<input type="submit" name="code"value="Code">
</form>
<?php
if(isset($_POST["code"])){
    $alert='<script>alert("<a href=\"<?php echo $_SERVER[\'PHP_SELF\'];?>?a=1&b=2&c=3\">Try1 </a>   \|\n    <a href=\"<?php echo $_SERVER[\'PHP_SELF\'];?>?a=3&b=2&c=1\">Try2 </a>   \|\n    <a href=\"<?php echo $_SERVER[\'PHP_SELF\'];?>?a=3&b=3&c=3\">Try3 </a>   \|\n<?php\n    echo\'<br>output:<br>\';\n    if(isset($_GET[\'a\'])){\n        if($_GET[\'a\']==\"3\" && $_GET[\'b\']==\"3\" && $_GET[\'c\']==\"3\"){\n            echo \"Well Done\";\n          }\n            else{\n                echo \"Try Again\";\n            }\n    }\n?>")</script>';
    echo $alert;
    //echo '&lt?php ?&gt';
    };
?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?a=1&b=2&c=3">Try1 </a>   |
<a href="<?php echo $_SERVER['PHP_SELF'];?>?a=3&b=2&c=1">Try2 </a>   |
<a href="<?php echo $_SERVER['PHP_SELF'];?>?a=3&b=3&c=3">Try3 </a>   |
<?php
echo'<br>output:<br>';
if(isset($_GET['a'])){
    if($_GET['a']=="3" && $_GET['b']=="3" && $_GET['c']=="3"){
        echo "Well Done";
      }
        else{
            echo "Try Again";
        }
}
?>
<hr></hr>
<br></br>
<form method="post">
  
</form>
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