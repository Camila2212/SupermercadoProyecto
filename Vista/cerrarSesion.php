<?php
session_start(); 
session_destroy();

header("Location: formularioIS.php");
exit();
?>
