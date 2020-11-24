<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$old_password= md5(md5(mysqli_real_escape_string($con,$_POST['oldPassword'])));
$new_password= md5(md5(mysqli_real_escape_string($con,$_POST['newPassword'])));
$email=$_SESSION['email'];
//echo $email;
$password_from_database_query="select password from user where email='$email'";
$password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($password_from_database_result);
//echo $row['password'];