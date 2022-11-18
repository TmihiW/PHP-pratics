<?php include 'inc/header.php'; ?>
<title>Sessions Page</title>
<body>
<br></br>
<?php
echo 'username = sa <br> password: pwd <br><br>';
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
  <div>
    Username: 
    <input type="text" name="username">
  </div>
  <div>
    Password: 
    <input type="password" name="password">
  </div>
  <input type="submit" name="submit" value="Enter">
</form>
<?php 
session_start();
if(isset($_POST['submit'])){  
    // Don't work with htmlspecialchars
    //$username = htmlspecialchars($_POST['username']);     
    //$password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
    $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password=$_POST['password'];
    echo'<br>';
    echo'<br>output:<br>';
    if($username=="sa" && $password=="pwd"){
      echo "You are logged in as $username";
      $_SESSION['username']=$username;
      header('Location: /PHP-pratics/extras/dashboard.php');
    }
    else{
      echo 'Something went wrong...';
    }  
  }
  
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