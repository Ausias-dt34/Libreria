<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Usuario o contraseña incorrecto";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("10.3.4.253", "libreria", "libreria");
// To protect MySQL injection for Security purpose
//$username = stripslashes($username);
//$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
$db = mysqli_select_db($connection,"libreria");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from usuarios where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
  $user= mysqli_fetch_array($query);
//$_SESSION['userLogin']=$userData['username'];// Initializing Session
    $_SESSION['userId']=$user['idUsuario'];
    $_SESSION['userName']=$user['nombre'];
    $_SESSION['userLast']=$user['apellidos'];
    $_SESSION['userLogin']=$user['username'];
    $_SESSION['userEmail']=$user['correo'];
    $_SESSION['userSuscripcion']=$user['suscripcion'];
    $_SESSION['userFechaAlta']=$user['fechaAlta'];
    global $user;
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Usuario o contraseña invalidos";
}
mysqli_close($connection); // Closing Connection
}
}
?>
