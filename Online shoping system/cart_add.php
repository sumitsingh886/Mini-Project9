<?php
require 'connection.php';
session_start();
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$add_to_cart_query="insert into user_item(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";