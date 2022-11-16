<?php include 'inc/header.php'; ?>
<title>File Handling Page</title>
<body>
<br></br>
<?php
echo'output:<br>';
$file='extras/users.txt';
if(file_exists($file)){
  echo readfile($file);
  echo'<br><br>';
  echo file_get_contents($file);
  echo'<br>';
}

?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
$file='extras/users.txt';
if(file_exists($file)){
  $handle = fopen($file,'r');
  $data = fread($handle,filesize($file));
  echo $data;
  fclose($handle);}
  else{
  $handle1 = fopen($file,'w');
  $contents='Kadir'.'|'.'Ahmet'.'|';
  fwrite($handle1,$contents);  
  fclose($handle1);
  }
  
?>
<hr></hr>
<br></br>
<form  method="post">
  <input type="text" name="name" placeholder="Enter Name">
  <input type="text" name="email" placeholder="Enter Email">
  <button type="submit" name="submit">Submit</button>
  <button type="submit" name="show">Show</button>
</form>
<?php
echo'<br>output:<br>';
$file2='extras/mails.txt';
$handle2=fopen($file2, 'a+');
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  if(!empty($name) && !empty($email)){
    $contents2 = $name.PHP_EOL.$email.PHP_EOL;
    fwrite($handle2, $contents2);
    fclose($handle2);    
    $name='';
    $email='';
  }

}
if(isset($_POST['show'])){
  $handle3=fopen($file2, 'r');
  $data2=fread($handle3, filesize($file2));
  echo $data2;
  fclose($handle3);
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