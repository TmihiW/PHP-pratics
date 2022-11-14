<?php
session_start();
if(isset($_SESSION['username'])){
  echo '<h1> Welcome '.$_SESSION['username'] . '</h1>';
  echo '<a href="logout.php">Logout</a><br>';
}else{
    echo '<h1> Welcome Guest </h1>';
    
}
echo'<br><br>';
echo '<a href="/PHP-pratics/13_sessions.php">|Sessions Page| </a>';

?>