<?php include 'inc/header.php'; ?>
<title>Cookies Page</title>
<body>
<br></br>
<form action="<?php echo($_SERVER['PHP_SELF']);?>"   method="GET">

<input type="submit" name="set" value="Set">
<input type="submit" name="del" value="Del">

</form>
<?php
echo'<br>output:<br>';


if(isset($_GET['set'])){
  setcookie('name','Kadir',time()+86400*30);
  if(isset($_COOKIE['name'])){
  echo $_COOKIE['name'];
}
 // setcookie('name','',time()-86400*30);
}
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST">  
<input type="text" name="nm" placeholder="Enter your name">
<input type="submit" name="ent"value="Enter">
<input type="submit" name="del2"value="Delete">
</form>

<?php
echo'<br>output:<br>';
if(isset($_POST['ent'])){  
  $name = htmlspecialchars($_POST['nm']);
  setcookie('name',"$name",time()+86400*30);
  if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
  }
}
if(isset($_POST['del2'])){
  setcookie('name','',time()-86400*30);
}
?>
<hr></hr>
<br></br>
<?php
echo'<br>using cookies for next load<br>';
?>
<hr></hr>
<br></br>
</body>
</html>