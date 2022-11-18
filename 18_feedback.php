<?php include 'inc/header.php'; ?>
<title>Feedback</title>
<body>
  <br></br>
  <br></br>
  <?php
  $sql='SELECT * FROM feedback';
  $result=mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo'output:<br>';
    if(empty($feedback)){
    echo 'Feedback table is empty';
    }else{
    echo var_dump($feedback);
    }

?>
<hr></hr>
<br></br>
<?php
echo'output:<br><br>';
foreach($feedback as $item){
    echo'<hr>By ['.$item["name"].'] :<br>'.$item["body"].'<br><hr>';
}
?>
<hr></hr>
<br></br>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <label for="name">Name</label>
    <input type="text" name="nameF" ><br><br>
    <label for="email">Email</label>
    <input type="text" name="emailF" ><br><br>
    <label for="body">Body</label>
    <textarea name="bodyF"></textarea><br><br>
    <input type="submit" name="submit" value="Send">
</form>
<?php
$name=$email=$body='';
$nameErr=$emailErr=$bodyErr='';

if(isset($_POST['submit'])){
    // validate name
    if(empty($_POST['nameF'])){
        $nameErr='Name is required';
    }else{
        $name=filter_input(INPUT_POST, 'nameF',FILTER_SANITIZE_SPECIAL_CHARS);
    }
    // validate email
    if(empty($_POST['emailF'])){
        $emailErr='Email is required';
    }else{
        $email=filter_input(INPUT_POST, 'emailF',FILTER_SANITIZE_EMAIL);
    }
    // validate body
    if(empty($_POST['bodyF'])){
        $bodyErr='Feedback is required';
    }else{
        $body=filter_input(INPUT_POST, 'bodyF',FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(empty($nameErr)&&empty($emailErr)&&empty($bodyErr)){
        //add to database
        $sql="INSERT INTO feedback(name,email,body) VALUES('$name','$email','$body')";
        if(mysqli_query($conn,$sql)){
            //success
            header('Location: /PHP-pratics/18_feedback.php');
        }else{
            echo 'Error: '.mysqli_error($conn);
        }
    }else{
        echo '<br>'.$nameErr.'<br> '.$emailErr.'<br> '.$bodyErr.'<br><br>';
    }
    
}

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