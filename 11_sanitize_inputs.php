<?php include 'inc/header.php'; ?>
<title>Sanitize Inputs Page</title>
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