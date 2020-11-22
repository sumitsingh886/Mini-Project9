<?php
require 'connection.php';
session_start();
$name= mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
?>