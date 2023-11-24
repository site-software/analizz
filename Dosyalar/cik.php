<?php 
include ('db.php');
session_start();
session_destroy();
echo header('location:index.php');
?>