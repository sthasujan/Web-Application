<?php 
session_start(); 
session_unset($_SESSION['SS_USER']);
session_destroy();
header("Location:"."index.php");
?>