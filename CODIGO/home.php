<?php
session_start();
$email= $_SESSION['username'];

echo "<h1>BIENVENIDO $email </h1>";
header("location:index.php");
?>