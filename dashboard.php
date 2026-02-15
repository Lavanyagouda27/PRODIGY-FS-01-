<?php
include 'db.php';
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card dashboard">
<h2>Welcome</h2>
<h3><?php echo $_SESSION['user']; ?></h3>

<p>You are logged in successfully.</p>

<a href="logout.php">Logout</a>
</div>

</body>
</html>