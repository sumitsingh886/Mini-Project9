<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}