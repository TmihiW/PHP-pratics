
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output Page</title>
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
  <hr></hr>
</head>
<br></br>
<body>

  <?php
  echo 'To write code like this use htmlspecialcharts(" ") for html codes in echo. <br>And for &lt?php ?&gt tag "'.htmlspecialchars("&lt").'?php" and ?'.htmlspecialchars("&gt").' in echo. <br><br>';
  echo htmlspecialchars("<h1>").'Merhaba &lt?php echo \'Hello\'; ?&gt'.htmlspecialchars("</h1>").'<br>  &lt?php if (false):?&gt '.htmlspecialchars("<h1>").'Hello1 &lt?php echo \'Merhaba\'; ?&gt'.htmlspecialchars("</h1>").'<br>	&lt?php elseif(true):?&gt'.htmlspecialchars("<h3>").'Hello2 &lt?php echo \'Merhaba\'; ?&gt'.htmlspecialchars("</h3>").'<br>	&lt?php endif;?&gt<br>';
   ?>
  <h1>Merhaba <?php echo 'Hello'; ?></h1>
  <?php if (false):?> <h1>Hello1 <?php echo 'Merhaba'; ?></h1>
	<?php elseif(true):?><h3>Hello2 <?php echo 'Merhaba'; ?></h3>
	<?php endif;?>
  
  <h2>Hello <?= 'Merhaba' ?></h2>

  <?php for ($i = 0; $i < 5; ++$i): ?>
     <h3> hi</h3>
	<?php endfor; ?>
	
	<br></br>
<?php

	echo " Hello World!   ";
?>
<br></br>
<?php

	echo 123, ' ABC' , ' a' ; 
?>
<br></br>

<?php


	//never gona use probably
	print ' Merhaba';
	print_r(' Hello ');
?>
<br></br>
<?php
	//print_r ile diziler yazdırılabilir
	echo'<hr>print_r([1,2,3]);<br>'.'output:<br>';
	print_r([1,2,3]);
?>
<br></br>
<?php
    //değişken tipi ve uzunluğunuda döndürür
	echo'<hr>var_dump(\'Merhaba\');<br>'.'output:<br>';
	var_dump('Merhaba');
?>
<br></br>
<?php
echo'<hr>var_dump(true);<br>'.'output:<br>';
	var_dump(true);
?>
<br></br>
<?php
echo'<hr>var_export(\'Hello\');<br>'.'output:<br>';
	var_export('Hello');

?>
<hr></hr>
</body>

</html>



	