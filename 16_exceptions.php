<?php include 'inc/header.php'; ?>
<title>Exceptions</title>
<body>
  <br></br>
<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}
?>

<br></br>
<?php
try{
    echo inverse(5).'<br>';
    echo inverse(0).'<br>';    
}catch(Exception $e){
    echo 'Caught exception: '.$e->getMessage().'<br>';
}finally{
    echo 'Finally.';
}
?>
<hr></hr>
<br></br>
<?php
echo'inverse(-) gives Parse error <br>inverse(0) gives Fatal error (can be catch) <br>';
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