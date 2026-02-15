<?php
$conn = new mysqli("localhost", "root", "", "secure_auth");

if ($conn->connect_error) {
    die("Connection failed");
}

session_start();
?>