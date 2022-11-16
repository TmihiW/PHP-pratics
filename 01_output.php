<?php include 'inc/header.php'; ?>
<title>Output Page</title>
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



	