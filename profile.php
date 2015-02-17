<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<div id="profile">
<b id="welcome">Bienvenido: <i><?php echo $_SESSION['userName']." ".$_SESSION['userLast'];  ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>