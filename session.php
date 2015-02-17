<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("10.3.4.253", "libreria", "libreria");
// Selecting Database
$db = mysqli_select_db($connection,"libreria");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['userId'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from usuarios where idUsuario='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['idUsuario'];
$userData= mysqli_fetch_array($ses_sql);
global $userData;
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
