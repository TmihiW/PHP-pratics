<?php
session_start();
session_destroy();
header('Location: /PHP-pratics/13_sessions.php');
?>