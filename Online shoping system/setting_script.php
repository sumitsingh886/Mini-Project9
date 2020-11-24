<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$old_password= md5(md5(mysqli_real_escape_string($con,$_POST['oldPassword'])));
$new_password= md5(md5(mysqli_real_escape_string($con,$_POST['newPassword'])));
$email=$_SESSION['email'];