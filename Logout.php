<?php 
session_start(); 
if(isset($_SESSION['user_id'])) 
{ 
    unset($_SESSION['user_id']); 
} 
header('Location: home.php'); 
echo '<script>alert("Logged Out From The Page!")</script>';
die;
?>