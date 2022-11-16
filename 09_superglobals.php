<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super Globals Page</title>
  <form action="00_main.php" method="post">     
  <button >Main Page</button>   
  </form>  
  <?php


 if(isset($_GET['prev'])){
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
<form method="POST"> 
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
<form method="POST"> 
<input type="submit" name="show2"value="Show">
<input type="submit" name="hide2"value="Hide">
<input type="submit" name="code2"value="Code">
<input type="submit" name="delsh2"value="DelSh">
<input type="submit" name="reset2"value="Reset">
</form>

<?php
 session_start(); 
 echo'<br>Before: <br>';
 echo var_dump($_SESSION).'<br>';
if(isset($_POST["show2"])){      
  $_SESSION["sh"] =1;
  echo'<br>'.$_SESSION["sh"].'<br>';  
  };
if(isset($_POST["hide2"])){
  $_SESSION["sh"] =0;  
  echo'<br>'.$_SESSION["sh"].'<br>';  
  };
if(isset($_POST["code2"])){
  $alert2='<script>alert("\n<ul>\n<li>Host:<?php echo $_SERVER[\'HTTP_HOST\'];?></li>\n<li>Doc Root:<?php echo $_SERVER[\'DOCUMENT_ROOT\'];?></li>\n<li>Server Name:<?php echo $_SERVER[\'SERVER_NAME\'];?></li>\n<li>Server Port:<?php echo $_SERVER[\'SERVER_PORT\'];?></li>\n<li>Current File Dir:<?php echo $_SERVER[\'PHP_SELF\'];?></li>\n<li>Request URI:<?php echo $_SERVER[\'REQUEST_URI\'];?></li>\n<li>Sv Software:<?php echo $_SERVER[\'SERVER_SOFTWARE\'];?></li>\n<li>Client Info:<?php echo $_SERVER[\'HTTP_USER_AGENT\'];?></li>\n<li>Remote Address:<?php echo $_SERVER[\'REMOTE_ADDR\'];?></li>\n<li>Remote Port:<?php echo $_SERVER[\'REMOTE_PORT\'];?></li>\n</ul>") </script>';
  echo $alert2;
}
if(isset($_POST["delsh2"])){
  unset($_SESSION["sh"]);
   echo'<br>'.var_dump($_SESSION).'<br>';
  };  
if(isset($_POST["reset2"])){
    session_unset();  
  };
  echo'<br> After: <br>';
  echo var_dump($_SESSION).'<br>';
?>
<?php if (array_key_exists("sh",$_SESSION)&&$_SESSION["sh"]==1):?>   
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
<?php elseif(array_key_exists("sh",$_SESSION)&&$_SESSION["sh"]==0):?>
  <h3>...</h3>  
<?php endif;?>
<hr></hr>
<br></br>

<form method="POST"> 
To Show Code :
<input type="submit" name="show3"value="Show Code">
To Hide Code :
<input type="submit" name="hide3"value="Hide Code">
</form>
<?php
 echo'<br>'.var_dump($_SESSION).'<br>';
if(isset($_POST["show3"])){      
  $_SESSION["sc"] =1;  
  echo'<br>'.var_dump($_SESSION).'<br><hr>';  
  };
if(isset($_POST["hide3"])){
  $_SESSION["sc"] =0;  
  echo'<br>'.var_dump($_SESSION).'<br>';  
  };
  ?>
 <?php if(array_key_exists("sc",$_SESSION)and$_SESSION["sc"]==1):?><?php    echo'<?php<br> session_start(); <br>if(isset($_POST["show2"])){      <br>  $_SESSION["sh"] =1;<br>  };<br>if(isset($_POST["hide2"])){<br>  $_SESSION["sh"] =0;  <br>  };<br>if(isset($_POST["code2"])){<br> echo $alert2;<br>}<br>if(isset($_POST["delsh2"])){<br>  unset($_SESSION["sh"]);<br>  };  <br>  if(isset($_POST["reset2"])){<br>    session_unset();  <br>  };<br>?>';  ?>
 <?php elseif(array_key_exists("sc",$_SESSION)and$_SESSION["sc"]==0):?><?php echo 'dont show code<br>'; ?>
 <?php endif;?>

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