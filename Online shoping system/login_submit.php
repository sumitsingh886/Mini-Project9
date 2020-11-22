<?php
require 'connection.php';
session_start();
$email=mysqli_real_escape_string($con,$_POST['email']);
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
