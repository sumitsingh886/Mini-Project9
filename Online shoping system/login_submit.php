<?php
require 'connection.php';
session_start();
$email=mysqli_real_escape_string($con,$_POST['email']);
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email)){
echo "Incorrect email. Redirecting you back to login page...";
?>
    <meta http-equiv="refresh" content="2;url=login.php" />
    <?php
}
$password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
if(strlen($password)<6){
    echo "Password should have atleast 6 characters. Redirecting you back to login page...";
    ?>
    <meta http-equiv="refresh" content="2;url=login.php" />
    <?php
}