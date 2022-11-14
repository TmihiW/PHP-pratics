<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super Globals Page</title>
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
echo'var_dump($_POST);<br>';
echo'output:<br>';
var_dump($_POST);
?>
<hr></hr>
<br></br>
<?php
echo'var_dump($_SERVER);';
?>
  <br></br>
<form method="post"> 
<input type="submit" name="show"value="Show">
<input type="submit" name="hide"value="Hide">
<input type="submit" name="code"value="Code">
</form>
<?php
echo'output:<br>';
$switch=0;
if(isset($_POST["show"])){
  $switch=1;
  if($switch==1){
    var_dump($_SERVER);
  } 
  };
if(isset($_POST["hide"])){
  $switch=0;  
  };
$code=0;
  if(isset($_POST["code"])){
  $alert='<script>alert("<form method=\"post\">\n  <input type=\"submit\" name=\"show\"value=\"Show\">\n  <input type=\"submit\" name=\"hide\"value=\"Hide\">\n</form>  \n<?php\n$switch=0;\nif(isset($_POST[\"show\"])){\n    $switch=1;\n    if($switch==1){\n      var_dump($_SERVER);\n    } \n    };\n    if(isset($_POST[\"hide\"])){\n    $switch=0;  \n    };\n?> ") </script>';
  echo $alert;

}
//echo '&lt?php ?&gt';
?>
<hr></hr>
<br></br>

<?php
echo'For better list:';
?>
<br></br>
<form method="post"> 
<input type="submit" name="show2"value="Show">
<input type="submit" name="hide2"value="Hide">
<input type="submit" name="code2"value="Code">
</form>
<?php
echo'output:<br>';
 $switch2=0;
if(isset($_POST["show2"])){
  $switch2=1;
  };
if(isset($_POST["hide2"])){
  $switch2=0; 
}; 
if(isset($_POST["code2"])){
  $alert2='<script>alert("\n<ul>\n<li>Host:<?php echo $_SERVER[\'HTTP_HOST\'];?></li>\n<li>Doc Root:<?php echo $_SERVER[\'DOCUMENT_ROOT\'];?></li>\n<li>Server Name:<?php echo $_SERVER[\'SERVER_NAME\'];?></li>\n<li>Server Port:<?php echo $_SERVER[\'SERVER_PORT\'];?></li>\n<li>Current File Dir:<?php echo $_SERVER[\'PHP_SELF\'];?></li>\n<li>Request URI:<?php echo $_SERVER[\'REQUEST_URI\'];?></li>\n<li>Sv Software:<?php echo $_SERVER[\'SERVER_SOFTWARE\'];?></li>\n<li>Client Info:<?php echo $_SERVER[\'HTTP_USER_AGENT\'];?></li>\n<li>Remote Address:<?php echo $_SERVER[\'REMOTE_ADDR\'];?></li>\n<li>Remote Port:<?php echo $_SERVER[\'REMOTE_PORT\'];?></li>\n</ul>") </script>';
  echo $alert2;
}
?>
<?php if ($switch2==1):?> 
<ul>
<li>Host:<?php echo $_SERVER['HTTP_HOST'];?></li>
<li>Doc. Root:<?php echo $_SERVER['DOCUMENT_ROOT'];?></li>
<li>Server Name:<?php echo $_SERVER['SERVER_NAME'];?></li>
<li>Server Port:<?php echo $_SERVER['SERVER_PORT'];?></li>
<li>Current File Dir:<?php echo $_SERVER['PHP_SELF'];?></li>
<li>Request URI:<?php echo $_SERVER['REQUEST_URI'];?></li>
<li>Sv Software:<?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
<li>Client Info:<?php echo $_SERVER['HTTP_USER_AGENT'];?></li>
<li>Remote Address:<?php echo $_SERVER['REMOTE_ADDR'];?></li>
<li>Remote Port:<?php echo $_SERVER['REMOTE_PORT'];?></li>
</ul>
<?php elseif($switch2==0):?>
  <h3>...</h3>
<?php endif;?>
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