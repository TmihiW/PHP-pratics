<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super Globals Page</title>
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
  <a href="12_cookies.php">|Cookies Page|</a>
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
   echo "<a href='12_cookies.php?prev=$a'>|Cookies Page| </a>";
  ?>
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
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["show"])){
    var_dump($_SERVER);
  };
  if(isset($_POST["code"])){
  $alert='<script>alert("<form method=\"post\">\n  <input type=\"submit\" name=\"show\"value=\"Show\">\n</form>  \n<?php\nif(isset($_POST[\"show\"])){\n    var_dump($_SERVER);\n  };\n?> ")</script>';
  echo $alert;
  };
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
 $s=0;
if(isset($_POST["show2"])){
  $s=1;  
  };

if(isset($_POST["code2"])){
  $alert2='<script>alert("\n<ul>\n<li>Host:<?php echo $_SERVER[\'HTTP_HOST\'];?></li>\n<li>Doc Root:<?php echo $_SERVER[\'DOCUMENT_ROOT\'];?></li>\n<li>Server Name:<?php echo $_SERVER[\'SERVER_NAME\'];?></li>\n<li>Server Port:<?php echo $_SERVER[\'SERVER_PORT\'];?></li>\n<li>Current File Dir:<?php echo $_SERVER[\'PHP_SELF\'];?></li>\n<li>Request URI:<?php echo $_SERVER[\'REQUEST_URI\'];?></li>\n<li>Sv Software:<?php echo $_SERVER[\'SERVER_SOFTWARE\'];?></li>\n<li>Client Info:<?php echo $_SERVER[\'HTTP_USER_AGENT\'];?></li>\n<li>Remote Address:<?php echo $_SERVER[\'REMOTE_ADDR\'];?></li>\n<li>Remote Port:<?php echo $_SERVER[\'REMOTE_PORT\'];?></li>\n</ul>") </script>';
  echo $alert2;
}
echo '<br>'.$s;
?>
<?php if ($s==1):?>   
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
<?php elseif($s==0):?>
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
echo'if(!Empty($_POST)){<br>  if(isset($_POST[\'alertPrevious\'])){<br>    $m = $_POST[\'alertPrevious\'];  <br>    $u = $_POST[\'message\'];<br>    echo $m.\' \'.$u;<br>    }    <br>}<br><br>';
echo'Message from previous page <br>output:<br>';
if(!Empty($_POST)){
    if(isset($_POST['alertPrevious'])){
      $m = $_POST['alertPrevious'];
      $u = $_POST['message'];
      echo $m.' '.$u;
      }
}

?>
<form action="08_string_functions.php" method="post">     
    <br>
    <button >Previous Page</button>
    <br>
</form>
<hr></hr>
<br></br>
</body>
</html>