<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
<h2>📝 Create Account</h2>

<form method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>

<?php
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql="INSERT INTO users(fullname,email,password)
          VALUES('$name','$email','$password')";

    if($conn->query($sql)){
        echo "<p>Registration Successful!</p>";
    } else {
        echo "<p>Email already exists!</p>";
    }
}
?>

<a href="login.php">Login Here</a>
</div>

</body>
</html>