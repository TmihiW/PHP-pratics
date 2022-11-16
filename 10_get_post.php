<?php include 'inc/header.php'; ?>
<title>Get Post Page</title>
<body>
<?php

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
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age">
  </div>
  <input type="submit" name="submit" value="Enter">
</form>
<?php
echo'if you are not submit data then use GET form<br>';
echo'<br>output:<br>';
if(isset($_GET['submit'])){
  echo var_dump($_GET);
  $name = $_GET['name'];
  $age = $_GET['age'];
  echo '<br>';
  echo "Your name is $name and you are $age years old";
}

?>
<hr></hr>
<br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <div>
    <label for="name2">Name:</label>
    <input type="text" name="name2">
  </div>
  <div>
    <label for="age2">Age:</label>
    <input type="text" name="age2">
  </div>
  <input type="submit" name="submit2" value="Enter">
</form>
<?php
echo'<br>output:<br>';


if(isset($_POST['submit2'])){
  echo var_dump($_POST);
  $name2 = $_POST['name2'];
  $age2 = $_POST['age2'];
  echo'<br>';
  echo "Your name is $name2 and you are $age2 years old";
}

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