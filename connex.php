<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);  
session_unset(); 
session_destroy();
header("location: index.php");


 ?>
