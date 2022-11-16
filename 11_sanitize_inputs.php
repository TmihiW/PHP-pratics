
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sanitize Inputs Page</title>
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
</head> 
<body>

<hr></hr>
<br></br>
<?php
echo'<br>code:<br>';
echo'if(isset($_POST[\'submit\'])){  <br>    $name = htmlspecialchars($_POST[\'name\']);  //covering with htmlspecialchars<br>    $sirname=filter_input(INPUT_POST,\'sirname\',FILTER_SANITIZE_SPECIAL_CHARS); //covering with filter_input **[prefered]**<br>    $email=filter_var($_POST[\'email\'],FILTER_SANITIZE_EMAIL); //covering with filter_var<br>    $age = filter_input(INPUT_POST,\'age\',FILTER_SANITIZE_NUMBER_INT); //covering with filter_input<br>    echo "&ltbr>";<br>    if(!empty($name) && !empty($age)){<br>      echo "Your name is $name $sirname and you are $age years old";<br>      echo "&ltbr> $email";<br>    }<br>    else{<br>      echo \'Please fill the blanks...\';<br>    }  <br>  }';
?>
<br></br><!--submit file itself can be another like action.php-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"><!--covering with htmlspecialchars-->
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="sirname">Sirname:</label>
    <input type="text" name="sirname">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age">
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="text" name="email">
  </div>
  <input type="submit" name="submit" value="Enter">
</form>
<?php 
echo'<br>output:<br>';
echo 'Type  '.htmlspecialchars("<script>alert(\"Hello\")</script>"). 'in the name and age field then click enter';
if(isset($_POST['submit'])){  
    $name = htmlspecialchars($_POST['name']);  //covering with htmlspecialchars
    $sirname=filter_input(INPUT_POST,'sirname',FILTER_SANITIZE_SPECIAL_CHARS); //covering with filter_input **[prefered]**
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL); //covering with filter_var
    $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT); //covering with filter_input
    echo'<br>';
    if(!empty($name) && !empty($age)){
      echo "Your name is $name $sirname and you are $age years old";
      echo "<br> $email";
    }
    else{
      echo 'Please fill the blanks...';
    }  
  }
?>
<hr></hr>
<br></br>
<?php
echo'<br>output:<br>';


?>
<hr></hr>
<br></br>
<?php
echo'<br>output:<br>';


?>
<hr></hr>
<br></br>
<?php
echo'<br>output:<br>';


?>
<hr></hr>
<br></br>

</body>
</html>