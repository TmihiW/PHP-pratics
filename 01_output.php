
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
  <a href="01_output.php">|Output Page|</a>
  <a href="02_variables.php">|Variables Page|</a>
  <a href="03_arrays.php">|Arrays Page|</a>
  <a href="04_conditionals.php">|Conditionals Page|</a>
  <a href="05_loops.php">|Loops Page|</a>
  <a href="06_functions.php">|Functions Page|</a>
  <a href="07_array_functions.php">|Array Functions Page|</a>
  <a href="08_string_functions.php">|String Functions Page|</a>
  <a href="09_superglobals.php">|Super Globals Page|</a>
  <a href="10_get_post.php">|Get Post Page|</a>
  <a href="11_sanitize_inputs.php">|Sanitize Inputs Page|</a>
  <a href="12_cookies.php">|Cookies Page|</a>
  <hr></hr>
  -->  
  <?php 
   $a = $_SERVER['PHP_SELF'];
   echo "<a href='01_output.php?prev=$a'>|Output Page| </a>";
   echo "<a href='02_variables.php?prev=$a'>|Variables Page| </a>";
   echo "<a href='03_arrays.php?prev=$a'>|Arrays Page| </a>";
   echo "<a href='04_conditionals.php?prev=$a'>|Conditionals Page| </a>";
   echo "<a href='05_loops.php?prev=$a'>|Loops Page| </a>";
   echo "<a href='06_functions.php?prev=$a'>|Functions Page| </a>";
   echo "<a href='07_array_functions.php?prev=$a'>|Array Functions Page| </a>";
   echo "<a href='08_string_functions.php?prev=$a'>|String Functions Page| </a>";
   echo "<a href='09_superglobals.php?prev=$a'>|Super Globals Page| </a>";
   echo "<a href='10_get_post.php?prev=$a'>|Get Post Page| </a>";
   echo "<a href='11_sanitize_inputs.php?prev=$a'>|Sanitize Inputs Page| </a>";
   echo "<a href='12_cookies.php?prev=$a'>|Cookies Page| </a>";
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



	