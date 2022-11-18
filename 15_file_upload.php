<?php include 'inc/header.php'; ?>
<title>File Upload Page</title>
<body>
<br></br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">Select image to upload:<br></br>
  <input type="file" name="uploadedFile1">
  <input type="submit" name="submit" value="Upload"></input>
  <br></br>
<?php
echo'output:<br>';
if(isset($_POST['submit'])){
    $allowed_ext=array('jpg','jpeg','png','gif');
    if(!empty($_FILES['uploadedFile1']['name'])){
         print_r($_FILES);
         $file_name=$_FILES['uploadedFile1']['name'];
         $file_type=$_FILES['uploadedFile1']['type'];
         $file_tmp=$_FILES['uploadedFile1']['tmp_name'];
         $file_size=$_FILES['uploadedFile1']['size'];
         echo'<br><br>'.$file_name.'<br>'.$file_type.'<br>'.$file_tmp.'<br>'.$file_size.'<br>';
         $target_dir="uploads/${file_name}";
         $file_ext=explode('.',$file_name);
         echo print_r($file_ext).' -> from print_r($file_ext);<br>'; //see $file_ext which is exploded from $file_name
         echo var_dump($file_ext).' -> from var_dump($file_ext);<br>';
         echo'Type: '.$file_ext[1].' -> from echo $file_ext[1];<br>'; //see $file_ext[1] which is the second element of $file_ext
         $file_ext2=explode('.',$file_name);
         $file_ext2=strtolower(end($file_ext));
         echo'Type: '.$file_ext2.' -> from $file_ext2=explode(\'.\',$file_name);         $file_ext2=strtolower(end($file_ext))  echo $file_ext2;<br>';
        if(in_array($file_ext2,$allowed_ext)){
            if($file_size<2097152){
                if(move_uploaded_file($file_tmp,$target_dir)){
                    $message='<p style="color:green;">File uploaded successfully</p>';
                }else{
                    $message='<p style="color:red;">File upload failed</p>';
                }
            }else{
                $message='<p style="color:red;">File size must be less than 2MB</p>';
            }
        }
        }else{
        $message='<p style="color:red;">Please select a image file</p>';
    }
}
echo $message??null;
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';

?>
<hr></hr>
<br></br>

<?php
echo'<br>output:<br>';
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