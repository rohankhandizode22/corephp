<?php
//CONNECTING TO DATABASE
$servername="localhost";
$username="root";
$password=""; 

//CREATE A CONNECTION
$conn= mysqli_connect($servername, $username, $password);

//CREATE A DATABASE
$sql="CREATE DATABASE dbrk";
mysqli_query($conn, $sql);
?>