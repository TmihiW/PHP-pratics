<?php include 'inc/header.php'; ?>
<title>Super Globals Page</title>
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
<hr></hr>
<br></br>
<?php
echo"<pre>";
echo'var_dump($_SERVER);';
echo"</pre>";
?>
<hr></hr>
<br></br>
<br></br>
<form method="POST"> 
<input type="text" name="sg">
<input type="submit" name="dd"value="DumpDie">
</form>
<?php
function dumpdie($v){
  echo"<pre>";
  var_dump($v);
  echo"</pre>";
  die();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["dd"])){
  $superglobal = htmlspecialchars($_POST['sg']);
  dd($superglobal);
};
echo'output:<br>';
//die();
?>
<hr></hr>
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