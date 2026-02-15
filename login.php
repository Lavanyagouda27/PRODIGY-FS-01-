<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
<h2>🔐 Secure Login</h2>

<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $res=$conn->query("SELECT * FROM users WHERE email='$email'");
    $user=$res->fetch_assoc();

    if($user && password_verify($password,$user['password'])){
        $_SESSION['user']=$user['fullname'];
        header("Location: dashboard.php");
    } else {
        echo "<p>Invalid login!</p>";
    }
}
?>

<a href="register.php">Create Account</a>
</div>

</body>
</html>